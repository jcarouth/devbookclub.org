const mailchimp = require('@mailchimp/mailchimp_marketing')
const crypto = require('crypto')

const { MAILCHIMP_API_KEY, MAILCHIMP_SERVER_PREFIX } = process.env

mailchimp.setConfig({
  apiKey: MAILCHIMP_API_KEY,
  server: MAILCHIMP_SERVER_PREFIX
})

const headers = {
  "Access-Control-Allow-Origin": "*",
  "Access-Control-Allow-Headers": "Content-Type",
  "Content-Type": "application/json",
};

exports.handler = async (event, context) => {
  // CORS preflight
  if (event.httpMethod === 'OPTIONS') {
    return {
      statusCode: 200,
      headers
    }
  }

  const { email, listId } = JSON.parse(event.body)

  if (!email || !listId) {
    return {
      statusCode: 400,
      headers,
      body: JSON.stringify({
        error: 'Missing data: email and listId are required'
      })
    };
  }

  const subscriberHash = crypto.createHash('md5').update(email).digest('hex')

  try {
    const response = await mailchimp.lists.setListMember(
      listId,
      subscriberHash,
      {
        email_address: email,
        status_if_new: 'pending',
      },
      {skipMergeValidation: true}
    )

    return {
      statusCode: 200,
      headers,
      body: JSON.stringify({
        email: response.email_address,
        status: response.status,
      })
    };
  } catch (e) {
    return {
      statusCode: 400,
      headers,
      body: JSON.stringify({
        status: 'error',
        message: e.response.body.title
      })
    };
  }
}
