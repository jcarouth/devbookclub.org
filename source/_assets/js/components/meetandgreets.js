window.meetandgreets = function () {
  return {
    email: '',
    error: false,
    events: [
      {
        id: '20210302-1830',
        title: 'Tuesday, Mar 2',
        time: '6:00 p.m. CT (-06:00)'
      },
      {
        id: '20210303-1900',
        title: 'Wednesday, Mar 3',
        time: '7:00 p.m. CT (-06:00)'
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
      const formData = new FormData(this.$refs.meetandgreetsForm);
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
