window.rsvp = function () {
  return {
    email: '',
    error: false,
    events: [],
    name: '',
    resultText: '',
    selectedEvents: [],
    eventSelected(id) {
      return this.selectedEvents.indexOf(id) > -1;
    },
    init(discussions) {
      this.events = discussions;
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
