(function() {
  $Q.IconsView = $Q.extendView.extend({
    tmpl: '#tmpl-icons',
    el: '#content-area',
    events: {},
    icons: [
      {id: '11', value: 'Despejado'},
      {id: '11n', value: 'Despejado noche'},
      {id: '12', value: 'Poco nuboso'},
      {id: '12n', value: 'Poco nuboso noche'},
      {id: '13', value: 'Intervalos nubosos'},
      {id: '13n', value: 'Intervalos nubosos noche'},
      {id: '14', value: 'Nuboso'},
      {id: '14n', value: 'Nuboso noche'},
      {id: '15', value: 'Muy nuboso'},
      {id: '15n', value: 'Muy nuboso'},
      {id: '16', value: 'Cubierto'},
      {id: '16n', value: 'Cubierto'},
      {id: '17', value: 'Nubes altas'},
      {id: '17n', value: 'Nubes altas noche'},
      {id: '23', value: 'Intervalos nubosos con lluvia'},
      {id: '23n', value: 'Intervalos nubosos con lluvia noche'},
      {id: '24', value: 'Nuboso con lluvia'},
      {id: '24n', value: 'Nuboso con lluvia noche'},
      {id: '25', value: 'Muy nuboso con lluvia'},
      {id: '25n', value: 'Muy nuboso con lluvia'},
      {id: '26', value: 'Cubierto con lluvia'},
      {id: '26n', value: 'Cubierto con lluvia'},
      {id: '27', value: ''},
      {id: '33', value: 'Intervalos nubosos con nieve'},
      {id: '33n', value: 'Intervalos nubosos con nieve noche'},
      {id: '34', value: 'Nuboso con nieve'},
      {id: '34n', value: 'Nuboso con nieve noche'},
      {id: '35', value: 'Muy nuboso con nieve'},
      {id: '35n', value: 'Muy nuboso con nieve'},
      {id: '36', value: 'Cubierto con nieve'},
      {id: '36n', value: 'Cubierto con nieve'},
      {id: '43', value: 'Intervalos nubosos con lluvia escasa'},
      {id: '43n', value: 'Intervalos nubosos con lluvia escasa noche'},
      {id: '44', value: 'Nuboso con lluvia escasa'},
      {id: '44n', value: 'Nuboso con lluvia escasa noche'},
      {id: '45', value: 'Muy nuboso con lluvia escasa'},
      {id: '45n', value: 'Muy nuboso con lluvia escasa'},
      {id: '46', value: 'Cubierto con lluvia escasa'},
      {id: '46n', value: 'Cubierto con lluvia escasa'},
      {id: '51', value: 'Intervalos nubosos con tormenta'},
      {id: '51n', value: 'Intervalos nubosos con tormenta noche'},
      {id: '52', value: 'Nuboso con tormenta'},
      {id: '52n', value: 'Nuboso con tormenta noche'},
      {id: '53', value: 'Muy nuboso con tormenta'},
      {id: '53n', value: 'Muy nuboso con tormenta'},
      {id: '54', value: 'Cubierto con tormenta'},
      {id: '54n', value: 'Cubierto con tormenta'},
      {id: '61', value: 'Intervalos nubosos con tormenta y lluvia escasa'},
      {id: '61n', value: 'Intervalos nubosos con tormenta y lluvia escasa noche'},
      {id: '62', value: 'Nuboso con tormenta y lluvia escasa'},
      {id: '62n', value: 'Nuboso con tormenta y lluvia escasa noche'},
      {id: '63', value: 'Muy nuboso con tormenta y lluvia escasa'},
      {id: '63n', value: 'Muy nuboso con tormenta y lluvia escasa'},
      {id: '64', value: 'Cubierto con tormenta y lluvia escasa'},
      {id: '64n', value: 'Cubierto con tormenta y lluvia escasa'},
      {id: '71', value: 'Intervalos nubosos con nieve escasa'},
      {id: '71n', value: 'Intervalos nubosos con nieve escasa noche'},
      {id: '72', value: 'Nuboso con nieve escasa'},
      {id: '72n', value: 'Nuboso con nieve escasa noche'},
      {id: '73', value: 'Muy nuboso con nieve escasa'},
      {id: '73n', value: 'Muy nuboso con nieve escasa'},
      {id: '74', value: 'Cubierto con nieve escasa'},
      {id: '74n', value: 'Cubierto con nieve escasa'}
    ],
    afterInitialize: function () {
      this.model = new $Q.ExtendViewModel();
      this.model.set({icons: this.icons}, {silent: true});
      this.pageLoaded();
    }
  }); 
}());