Castanet = {
    BASE_URL:   "//castanet.kiban.paperboy.co.jp",
    IMAGE_PATH: '/castanet.gif',
    CASTANET_SERVICES: {
        'sqale_production'         : /^https?:\/\/sqale\.jp/,
        'muumuu-domain-smartphone' : /^https?:\/\/muumuu\-domain\.com\/sp/,
        'muumuu-domain'            : /^https?:\/\/muumuu-domain\.com/,
        'jugem'                    : /^https?:\/\/jugem\.jp/,
        'jugemcart'                : /^https?:\/\/(ja\.)?jugemcart\.com/,
        'potofoo'                  : /^https?:\/\/potofoo\.jp/,
        'colorme'                  : /^https?:\/\/shop\-pro\.jp/,
        'lolipop'                  : /^https?:\/\/lolipop\.jp/,
        'minne_production'         : /^https?:\/\/minne\.com/,
        'puboo'                    : /^https?:\/\/p\.booklog\.jp/,
        '30days'                   : /^https?:\/\/30d\.jp/,
        'petit'                    : /^https?:\/\/(www\.)?petit\.cc/,
        'booklog'                  : /^https?:\/\/booklog\.jp/,
        'calamel'                  : /^https?:\/\/calamel\.jp/,
        'goope'                    : /^https?:\/\/goope\.jp/,
        'heteml'                   : /^https?:\/\/heteml\.jp/
    },
    REFERENCE_QUERY: '__castanet_via',

    _service:        null,
    _age:            undefined,
    _career:         undefined,
    _area:           undefined,
    _gender:         undefined,
    _interest:       undefined,
    _isLoggedIn:     undefined,
    _pageQuery:      {},
    _eventQuery:     {},
    _castanetBidKey: 'uid',

    _buildURLFrom: function (query) {
        var url   = this.BASE_URL + this.IMAGE_PATH;
        var pairs = [];

        for (var key in query) {
            if (!query.hasOwnProperty(key)) continue;
            pairs.push(encodeURIComponent(key) + '=' + encodeURIComponent(query[key]));
        }

        if (pairs.length > 0) url += '?';
        return url + pairs.join('&');
    },

    _dispatchRequest: function (event) {
        var query = this._prepareQuery(event);
        var image = document.createElement('img');
            image.onload  = this._makeHandler(event);
            image.onerror = this._makeHandler(event);
            image.src     = this._buildURLFrom(query);

        document.body.appendChild(image);
    },

    _dispatchRequestToOwldata: function () {
        if (!this._service.match(/^(goope|muumuu-domain|muumuu-domain-smartphone|jugem|colorme|calamel|30days|minne|lolipop|booklog|puboo)/)) {
            return;
        }

        if (typeof window.dmids == 'undefined') {
            window.dmids = {};
        }

        window.dmids['ccb5017da6cff13b'] = 'j.owldata.com';
        window.acDMPOwldata = 1;

        this._setOwldataCallback();

        var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src  = '../j.owldata.com/js/d.js';

        document.body.appendChild(script);
    },

    _setOwldataCallback: function () {
        if (!this._isLoggedIn) {
            return;
        }

        var self = this;
        var callback = function (o) {};

        switch(this._service) {
            case 'calamel':
                callback = function (o) {
                    try{
                        if (typeof self._age != 'undefined') {
                            o.addParams('P1', self._age);
                        }
                        if (typeof self._career != 'undefined') {
                            o.addParams('P2', self._career);
                        }
                        if (typeof self._area != 'undefined') {
                            o.addParams('P3', self._area);
                        }
                        if (typeof self._gender != 'undefined') {
                            o.addParams('P4', self._gender);
                        }
                        if (typeof self._interest != 'undefined') {
                            o.addParams('P5', self._interest);
                        }
                    } catch(e) {
                    }
                };

                break;
            case 'minne_production':
                callback = function (o) {
                    try{
                        if (typeof self._age != 'undefined') {
                            o.addParams('M1', self._age);
                        }
                        if (typeof self._area != 'undefined') {
                            o.addParams('M2', self._area);
                        }
                        if (typeof self._gender != 'undefined') {
                            o.addParams('M3', self._gender);
                        }
                    } catch(e) {
                    }
                };

                break;
            case 'puboo':
                callback = function (o) {
                    try{
                        if (typeof self._age != 'undefined') {
                            o.addParams('F1', self._age);
                        }
                        if (typeof self._area != 'undefined') {
                            o.addParams('F2', self._area);
                        }
                        if (typeof self._gender != 'undefined') {
                            o.addParams('F3', self._gender);
                        }
                    } catch(e) {
                    }
                };

                break;
            case 'booklog':
                callback = function (o) {
                    try{
                        if (typeof self._age != 'undefined') {
                            o.addParams('S1', self._age);
                        }
                        if (typeof self._gender != 'undefined') {
                            o.addParams('S2', self._gender);
                        }
                    } catch(e) {
                    }
                };

                break;
            default:
                return;
        }

        window.setACDParamsOwldata = callback;
    },

    _makeHandler: function (event) {
        var self = this;

        return function () {
            // Query is should be set to empty per event/page request
            if (event) {
                self._eventQuery[event] = {};
            }
            else {
                self._pageQuery = {};
            }

            // Remove image tag when request completed
            document.body.removeChild(this);
        };
    },

    _prepareQuery: function (event) {
        var query;

        if (event) {
            query = this._eventQuery[event];
        }
        else {
            query = this._pageQuery;
        }

        // service
        if (!this._service) {
            throw 'Mandatory parameter `service` is not set. Request was aborted.';
        }
        else {
            query['service'] = this._service;
        }

        // attributes
        var attrs = ['age', 'career', 'area', 'gender', 'interest'];
        for (var i = 0, l = attrs.length; i < l; i++) {
            value = this['_' + attrs[i]];

            if (typeof value != 'undefined') {
                query['castanet_' + attrs[i]] = value;
            }
        }

        // user or guest
        if (typeof this._isLoggedIn != 'undefined') {
            query['is_logged_in'] = this._isLoggedIn ? 1 : 0;
        }

        // browser id of each services
        var service_bid = this._getBid();
        if (!query['service_bid'] && service_bid) {
            query['service_bid'] = service_bid;
        }

        // current location
        query['location'] = location.href;

        // referrer
        query['page_referrer'] = document.referrer;

        // queries of current location
        var requestQuery = this._parseQuery();
        for (var key in requestQuery) {
            query[key] = requestQuery[key];
        }

        // smartphone flags
        query['is_sp']      = this._isSmartphone();
        query['is_sp_page'] = this._isSmartphonePage();

        // search word
        query['search_word'] = this._extractSearchWord();

        return query;
    },

    _parseQuery: function () {
        var query = {};

        if (location.search === '') {
            return query;
        }

        var pairs = location.search.replace(/^\?/, '').split(/&/);

        for (var i = 0, l = pairs.length; i < l; i++) {
            var pair = pairs[i].split(/=/);
            query[pair[0]] = pair[1];
        }

        return query;
    },

    _getBid: function () {
        var cookies = this._parseCookies();
        return cookies[this._castanetBidKey];
    },

    _parseCookies: function () {
        var pairs   = document.cookie.split(/;\s+/);
        var cookies = {};

        for (var i = 0, l = pairs.length; i < l; i++) {
            var pair = pairs[i].split(/=/);
            cookies[pair[0]] = pair[1];
        }

        return cookies;
    },

    _isSmartphone: function () {
        isSmartphone = 0;

        if (
                (navigator.userAgent.indexOf('iPhone') > 0 && navigator.userAgent.indexOf('iPad') == -1) ||
                navigator.userAgent.indexOf('iPod') > 0                                                  ||
                navigator.userAgent.indexOf('Android') > 0
           ) {
               isSmartphone = 1;
        }

        return isSmartphone;
    },

    _isSmartphonePage: function () {
        metaElements = document.getElementsByTagName('meta');

        for (var i = 0, l = metaElements.length; i < l; i++) {
            if (
                metaElements[i].getAttribute('name') == 'viewport' &&
                metaElements[i].getAttribute('content').match(new RegExp('device-width'))
            ) {
                return 1;
            }
        }

        return 0;
    },

    _extractSearchWord: function () {
        word = '';

        if (document.referrer.match(/^http:\/\/search\.yahoo\.co\.jp/)) {
            if (m = document.referrer.match(/p=([^&]+)/)) {
                word = m[1];
            }
        }
        if (document.referrer.match(/^http:\/\/(www\.)?google\.co\.jp/)) {
            if (m = document.referrer.match(/q=([^&]+)/)) {
                word = m[1];
            }
        }

        return decodeURIComponent(word);
    },

    _addReferenceQueryForCastanet: function () {
        links     = document.links;
        hasQuery  = /\?.+/;
        ownRegexp = this.CASTANET_SERVICES[this._service];

        if (!ownRegexp) {
            return;
        }

        if (!this._service) {
            throw 'Mandatory parameter `service` is not set.';
        }

        for (var i = 0, l = links.length; i < l; i++) {
            var link = links[i];

            if (ownRegexp.test(link.href)) {
                continue;
            }

            for (var service in this.CASTANET_SERVICES) {
                serviceRegexp = this.CASTANET_SERVICES[service];

                if (serviceRegexp.test(link.href) && service != this._service) {
                    if (link.href.match(hasQuery)) {
                        link.href = link.href + '&' + this.REFERENCE_QUERY + '=' + this._service;
                    }
                    else {
                        link.href = link.href + '?' + this.REFERENCE_QUERY + '=' + this._service;
                    }

                    break;
                }
            }
        }
    }
};

// Public Methods
Castanet.setService = function (service) {
    this._service = service;
};

Castanet.setAge = function (age) {
    this._age = age;
};

Castanet.setCareer = function (career) {
    this._career = career;
};

Castanet.setArea = function (area) {
    this._area = area;
};

Castanet.setGender = function (gender) {
    this._gender = gender;
};

Castanet.setInterest = function (interest) {
    this._interest = interest;
};

Castanet.isLoggedIn = function (flag) {
    this._isLoggedIn = flag;
};

Castanet.addEventQuery = function (event, query) {
    for (var key in query) {
        if (!query.hasOwnProperty(key)) continue;
        if (!this._eventQuery[event]) this._eventQuery[event] = {};

        this._eventQuery[event][key] = query[key];
    }
};

Castanet.dispatchEventRequest = function (event) {
    this.addEventQuery(event, { event: event });
    this._dispatchRequest(event);
};

Castanet.addPageQuery = function (query) {
    for (var key in query) {
        if (!query.hasOwnProperty(key)) continue;
        this._pageQuery[key] = query[key];
    }
};

Castanet.dispatchPageRequest = function () {
    this._dispatchRequest();
    this._dispatchRequestToOwldata();
    this._addReferenceQueryForCastanet();
};

Castanet.setCastanetBidKey = function (key) {
    this._castanetBidKey = key;
};
