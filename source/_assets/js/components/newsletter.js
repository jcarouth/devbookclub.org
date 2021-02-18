window.newsletter = function () {
  return {
    config: {
      endpoints: {
        subscribe: '/.netlify/functions/subscribe'
      }
    },
    formData: {
      email: '',
      listId: '65a204dbb9'
    },
    isLoading: false,
    isSuccess: false,
    result: null,
    init() {
      this.reset();
    },
    reset() {
      this.isLoading = false;
      this.formData.email = '';
    },
    submit() {
      this.isLoading = true;
      this.result = '';

      if (this.formData.email === '') {
        this.isLoading = false;
        this.isSuccess = false;
        this.result = 'Please enter your email address.';

        return false;
      }

      let self = this;

      fetch(this.config.endpoints.subscribe, {
        method: 'POST',
        body: JSON.stringify({
          email: this.formData.email,
          listId: this.formData.listId,
        }),
        headers: { 'Content-Type': 'application/json' },
      })
        .then(r => {
          return r.json()
        })
        .then(data => {
          self.isSuccess = true;

          if (data.status === 'error') {
            self.isSuccess = false;
            self.result = 'We could not subscribe you at this time. Please try again.';
          } else if (data.status === 'pending') {
            self.result = 'You have been subscribed. Please check your email to confirm.';
          } else {
            self.result = 'You are already subscribed. Thank you for your continued participation!';
          }

          self.reset()
        })
        .catch(e => {
          self.isSuccess = false;
          self.result = 'We could not subscribe you at this time. Please try again.';
        })
        .finally(() => {
          self.isLoading = false;
        })
    }
  }
};
