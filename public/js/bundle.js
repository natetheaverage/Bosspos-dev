(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

var _interopRequireWildcard = function (obj) { return obj && obj.__esModule ? obj : { 'default': obj }; };

var _GistBox = require('./react/GistBox');

var _GistBox2 = _interopRequireWildcard(_GistBox);

React.render(React.createElement(_GistBox2['default'], null), document.querySelector('#app'));

},{"./react/GistBox":4}],2:[function(require,module,exports){
"use strict";

Object.defineProperty(exports, "__esModule", {
    value: true
});
var Gist = React.createClass({
    displayName: "Gist",

    render: function render() {
        return React.createElement(
            "div",
            null,
            this.props.username,
            "'s last Gist is ",
            React.createElement(
                "a",
                { href: this.props.url },
                " here "
            )
        );
    }

});

exports["default"] = Gist;
module.exports = exports["default"];

},{}],3:[function(require,module,exports){
'use strict';

Object.defineProperty(exports, '__esModule', {
    value: true
});
var GistAddForm = React.createClass({
    displayName: 'GistAddForm',

    getInitialState: function getInitialState() {
        return {
            username: ''
        };
    },

    onChange: function onChange(e) {
        this.setState({ username: e.target.value });
    },

    addGist: function addGist(e) {

        this.props.onAdd(this.state.username);

        this.setState({ username: '' });

        e.preventDefault();
    },
    render: function render() {
        return React.createElement(
            'div',
            null,
            React.createElement(
                'form',
                { onSubmit: this.addGist },
                React.createElement('input', { value: this.state.username, onChange: this.onChange, placeholder: 'github username' }),
                React.createElement(
                    'button',
                    null,
                    'find'
                )
            )
        );
    }

});
exports['default'] = GistAddForm;
module.exports = exports['default'];

},{}],4:[function(require,module,exports){
'use strict';

var _interopRequireWildcard = function (obj) { return obj && obj.__esModule ? obj : { 'default': obj }; };

Object.defineProperty(exports, '__esModule', {
    value: true
});

var _Gist = require('./Gist');

var _Gist2 = _interopRequireWildcard(_Gist);

var _GistAddForm = require('./GistAddForm');

var _GistAddForm2 = _interopRequireWildcard(_GistAddForm);

var GistBox = React.createClass({
    displayName: 'GistBox',

    getInitialState: function getInitialState() {

        return {
            gists: [{ username: 'jefferyway', url: 'http://google.com' }]
        };
    },

    addGist: function addGist(username) {

        var url = 'https://api.github.com/users/' + username + '/gists';

        $.get(url, (function (results) {
            //console.log(results);
            var username = results[0].owner.login;
            var url = results[0].html_url;
            var gists = this.state.gists.concat({ username: username, url: url });

            this.setState({ gists: gists });
        }).bind(this));
    },

    render: function render() {

        var newGist = function newGist(gist) {
            return React.createElement(_Gist2['default'], { username: gist.username, url: gist.url });
        };

        return React.createElement(
            'div',
            null,
            React.createElement(
                'h1',
                null,
                'Gist Box'
            ),
            React.createElement(_GistAddForm2['default'], { onAdd: this.addGist }),
            this.state.gists.map(newGist)
        );
    }

});

exports['default'] = GistBox;
module.exports = exports['default'];

},{"./Gist":2,"./GistAddForm":3}]},{},[1]);
