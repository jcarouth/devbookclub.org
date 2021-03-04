window.rsvp = function () {
  return {
    email: '',
    error: false,
    events: [
      {
        id: '202103211815',
        title: 'Chapter 1: Refactoring: A First Example',
        time: 'March 21, 2021 6:15pm CT (-05:00)'
      },
      {
        id: '202103281815',
        title: 'Chapter 2: Principles in Refactoring',
        time: 'March 28, 2021 6:15pm (-0500)'
      },
      {
        id: '20210411815',
        title: 'Chapter 3: Bad Smells in Code',
        time: 'April 11, 2021 6:15pm (-0500)'
      },
      {
        id: '202104181815',
        title: 'Chapter 4: Building Tests & Chapter 5: Introducing the Catalog',
        time: 'April 18, 2021 6:15pm (-0500)'
      },
      {
        id: '202104251815',
        title: 'Chapter 6: A First Set of Refactorings',
        time: 'April 25, 2021 6:15pm (-0500)'
      },
      {
        id: '202105021815',
        title: 'Chapter 7: Encapsulation',
        time: 'May 2, 2021 6:15pm (-0500)'
      },
      {
        id: '202105091815',
        title: 'Chapter 8: Moving Features',
        time: 'May 9, 2021 6:15pm (-0500)'
      },
      {
        id: '202105161815',
        title: 'Chapter 9: Organizing Data',
        time: 'May 16, 2021 6:15pm (-0500)'
      },
      {
        id: '202105231815',
        title: 'Chapter 10: Simplifying Conditional Logic',
        time: 'May 23, 2021 6:15pm (-0500)'
      },
      {
        id: '202105301815',
        title: 'Chapter 11: Refactoring APIs',
        time: 'May 30, 2021 6:15pm (-0500)'
      },
      {
        id: '20210302-1830',
        title: 'Chapter 12: Dealing with Inheritance',
        time: 'June 6, 2021 6:15pm (-0500)'
      },

    ],
    name: '',
    resultText: '',
    selectedEvents: [],
    eventSelected(id) {
      return this.selectedEvents.indexOf(id) > -1;
    },
    reset() {
      this.selectedEvents = [];
      this.email = '';
      this.name = '';
    },
    submit() {
      const formData = new FormData(this.$el);
      const self = this;

      fetch ('/', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: new URLSearchParams(formData).toString(),
      }).then((r) => {
        if (r.ok) {
          self.resultText = 'RSVP received, see you then!';
          self.reset();
        } else {
          self.resultText = 'Could not submit RSVP. Please try again.';
          self.error = true;
        }
      }).catch((e) => {
        self.resultText = 'Could not submit RSVP. Please try again.';
        self.error = true;
      })
    },
    toggleEvent(id) {
      if (this.eventSelected(id)) {
        this.selectedEvents = this.selectedEvents.filter(e => e !== id);
      } else {
        this.selectedEvents.push(id)
      }
    }
  };
}
