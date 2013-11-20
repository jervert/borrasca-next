(function() {
  $Q.utils = {};
  // Geolocation
  $Q.utils.getGeolocation = function () {
    var fireGeolocated = function (geolocationState) {
      $(document).trigger('geolocated');
    },
      geolocationSuccess = function (position) {
        $Q.geolocation = {
          latitude: position.coords.latitude,
          longitude: position.coords.longitude
        };
        fireGeolocated('success');
      },
      geolocationError = function (error) {
        fireGeolocated('error');
      },
      geolocationOptions = {
        enableHighAccuracy: true,
        maximumAge: 600000,
        timeout: 45000
      };
    if (_.support_geolocation()) {
      navigator.geolocation.getCurrentPosition(geolocationSuccess, geolocationError, geolocationOptions);
    } else {
      $(document).trigger('geolocated');
    }
  };

  // Navigate
  $Q.utils.navigate = function (ev) {
    var url = $(ev.currentTarget).attr('data-link');
    ev.preventDefault();
    $.each($Q.removableViews, function () {
      var view = $Q.views[this];
      if (!_.isEmpty(view)) {
        view.remove();
        $Q.views[this] = null;
      }
    });
    $Q.loading();
    $Q.ui.menuCollapse();
    if ($Q.piwik.ready) {
      $Q.utils.piwikStats.trackPageView(url);
    }
    $Q.app_router.navigate(url, {trigger: true});
  };

  $Q.utils.mergeEvents = function (self) {
    $Q.utils.mergeObject(self, 'events');
  };

  $Q.utils.mergeObject = function (view, type) {
    view[type] = view[type] || {};
    if (type === 'events') {
      view[type] = _.extend(view[type], view.coreEvents);
    }
  };

  // Piwik tracking
  $Q.utils.piwikStats = (function () {
    var fn = {
      getUrl: function () {
        return (("https:" == document.location.protocol) ? 'https://' + $Q.piwik.url + '/' : 'http://' + $Q.piwik.url + '/');
      },
      getScriptUrl: function () {
        return this.getUrl() + 'piwik.js';
      }
    };
    return {
      start: function () {
        $Q.piwikTracker = Piwik.getTracker();
        $Q.piwikTracker.setSiteId($Q.piwik.id);
        $Q.piwikTracker.setTrackerUrl(fn.getUrl() +'piwik.php');
      },
      getScriptUrl: function () {
        return fn.getUrl() + 'piwik.js';
      },
      trackPageView: function (url) {
        $Q.piwikTracker.trackPageView(url);
      }
    }
  }());

})();