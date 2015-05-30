(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

var _interopRequireWildcard = function (obj) { return obj && obj.__esModule ? obj : { 'default': obj }; };

var _TaskSystem = require('./react/projects/TaskSystem');

var _TaskSystem2 = _interopRequireWildcard(_TaskSystem);

var _Projecter = require('./react/projects/Projecter');

var _Projecter2 = _interopRequireWildcard(_Projecter);

React.render(React.createElement(_TaskSystem2['default'], null), document.querySelector('#TaskSystem'));
React.render(React.createElement(_Projecter2['default'], null), document.querySelector('#ProjecterDirectory'));

},{"./react/projects/Projecter":11,"./react/projects/TaskSystem":14}],2:[function(require,module,exports){
'use strict';

var _interopRequireWildcard = function (obj) { return obj && obj.__esModule ? obj : { 'default': obj }; };

Object.defineProperty(exports, '__esModule', {
    value: true
});

var _Message = require('./Message');

var _Message2 = _interopRequireWildcard(_Message);

var Conversation = React.createClass({
    displayName: 'Conversation',

    getInitialState: function getInitialState() {

        var messages = [];
        for (var i in this.props.messages) {
            messages.push([i, this.props.messages[i]]);
            //console.log('THIS IS IN Conversation >> >> >> ', this.props.messages);
        }
        return {
            id: this.props.id,
            messages: this.props.messages,
            message: {},
            newMessageBodyText: '',
            newMessageId: $(bosspos.messageCounter)[0]
        };
    },
    broadcast: function broadcast(newMessage) {
        socket.emit('project:message', newMessage);
    },
    onChange: function onChange(e) {
        var newMessageBodyText = e.target.value;
        this.setState({ newMessageBodyText: newMessageBodyText });
    },
    createNewMessage: function createNewMessage(e) {
        e.preventDefault();
        var newMessageBodyText = this.state.newMessageBodyText;
        var newMessageId = $(bosspos.messageCounter)[0] + 1;
        var newMessage = ['message', {
            body: newMessageBodyText,
            className: 'info',
            conversation_id: this.props.id,
            created_at: 'time',
            deleted_at: null,
            id: newMessageId,
            subject: 'The teleporter resists.',
            tagged_id: 1,
            updated_at: 'time',
            user_id: 1
        }];
        //console.log('Conversation.js@newMessage generated : ', $(bosspos.messageCounter)[0]);
        newMessageBodyText = '';
        this.setState({ newMessageBodyText: newMessageBodyText });
        this.broadcast(newMessage);
    },
    addMessage: function addMessage(e, message) {
        e.preventDefault();
        var messages = this.state.messages.concat(message);
        message = {};
        this.setState({ messages: messages, message: message });
    },
    render: function render() {
        var newMessageList = (function (message) {
            //console.log('THIS IS IN Conversation >> >> >> ', message[1].body);
            return React.createElement(_Message2['default'], {
                id: message[1].id,
                conversation_id: this.props.id,
                project: this.props.project,
                messageBodyText: message[1].body
            });
        }).bind(this);
        return React.createElement(
            'div',
            { className: 'col-md-12 mar-btm' },
            React.createElement(
                'a',
                { className: 'list-group-item mar-no' },
                React.createElement(
                    'div',
                    { className: 'bord-btm mar-btm' },
                    React.createElement(
                        'div',
                        { className: 'btn-group pull-right' },
                        React.createElement(
                            'button',
                            { className: 'btn btn-sm btn-mint ' },
                            React.createElement('span', { className: 'fa fa-edit' })
                        ),
                        React.createElement(
                            'button',
                            { className: 'btn btn-sm btn-danger' },
                            React.createElement('span', { className: 'fa fa-close' })
                        )
                    ),
                    React.createElement(
                        'span',
                        { className: 'list-group-item-heading text-2x' },
                        this.props.title
                    )
                ),
                React.createElement(
                    'p',
                    { className: 'list-group-item-text' },
                    this.props.description
                ),
                React.createElement(
                    'p',
                    { className: 'list-group-item-text' },
                    this.props.updated_at
                )
            ),
            React.createElement(
                'div',
                { className: 'timeline' },
                this.props.messages.map(newMessageList),
                React.createElement(
                    'div',
                    { className: 'timeline-header' },
                    React.createElement(
                        'button',
                        { className: 'btn btn-primary ', onClick: this.createNewMessage },
                        React.createElement('span', { className: 'fa fa-plus' }),
                        ' Comment'
                    )
                )
            )
        );
    }

});

exports['default'] = Conversation;
module.exports = exports['default'];

},{"./Message":3}],3:[function(require,module,exports){
'use strict';

Object.defineProperty(exports, '__esModule', {
    value: true
});
//require('babel/polyfill');
//var TextareaAutosize = require('react-textarea-autosize');

var Message = React.createClass({
    displayName: 'Message',

    mixins: [React.addons.LinkedStateMixin],
    getInitialState: function getInitialState() {
        //console.log('Message.js@getInitialState generated --: ', this.props.messageBodyText);

        return {
            id: this.props.id,
            messageBodyText: this.props.messageBodyText,
            conversation_id: this.props.conversation_id
        };
    },
    broadcast: function broadcast(newMessage) {
        socket.emit('project:message:change', 1, newMessage);
    },
    useTextAreaResize: function useTextAreaResize(e) {
        autosize(e.target);
        //console.log(" textarea  projector " , e.target);
    },
    onChange: function onChange(e) {
        var messageBodyText = e.target.value;
        this.setState({ messageBodyText: messageBodyText });
        this.updateMessage(messageBodyText);
    },
    updateMessage: function updateMessage(messageBodyText) {
        //var messageBodyText = this.state.messageBodyText;
        var Message = ['message', {
            body: messageBodyText,
            className: 'info',
            conversation_id: this.state.conversation_id,
            created_at: 'time',
            deleted_at: null,
            id: this.props.id,
            subject: 'The teleporter resists.',
            tagged_id: 1,
            updated_at: 'time',
            user_id: 1
        }];
        //console.log('Message.js@updateMessage generated : ', this.props.conversation_id);
        //messageBodyText = '';
        //this.setState({ messageBodyText });

        this.broadcast(Message);
    },
    render: function render() {
        //console.log('Conversation.js@render generated -=-: ', this.props.messageBodyText);

        return React.createElement(
            'div',
            { className: 'timeline-entry' },
            React.createElement(
                'div',
                { className: 'timeline-stat' },
                React.createElement(
                    'div',
                    { className: 'timeline-icon' },
                    React.createElement('img', { src: 'img/av4.png', alt: 'Image' })
                ),
                React.createElement(
                    'div',
                    { className: 'timeline-time' },
                    '3 Hours ago'
                )
            ),
            React.createElement(
                'div',
                { className: 'timeline-label' },
                React.createElement(
                    'div',
                    { className: 'btn-group pull-right' },
                    React.createElement(
                        'button',
                        { className: 'btn btn-sm btn-mint' },
                        React.createElement('span', { className: 'fa fa-edit' })
                    ),
                    React.createElement(
                        'button',
                        { className: 'btn btn-sm btn-danger' },
                        React.createElement('span', { className: 'fa fa-close' })
                    )
                ),
                React.createElement(
                    'span',
                    { className: 'mar-no pad-btm' },
                    React.createElement(
                        'a',
                        { href: '#', className: 'btn-link primary text-semibold' },
                        'Lisa D.'
                    ),
                    ' added this note to ',
                    React.createElement(
                        'a',
                        { href: '#' },
                        'This Project this conversation'
                    )
                ),
                React.createElement(
                    'form',
                    { className: '', onChange: this.onChange, onSubmit: this.saveMessage },
                    React.createElement(
                        'div',
                        { className: 'input-group display-flex b' },
                        React.createElement('textarea', { className: 'form-control form-textarea project-message-body', value: this.props.messageBodyText, onChange: this.useTextAreaResize })
                    )
                )
            )
        );
    }
});
exports['default'] = Message;
module.exports = exports['default'];

},{}],4:[function(require,module,exports){
'use strict';

Object.defineProperty(exports, '__esModule', {
    value: true
});
// Push projects to array for mapping
var ObjectToArray = function ObjectToArray() {
    var obj = arguments[0] === undefined ? { you: 'fuck', now: 'off' } : arguments[0];

    var toReturn = [];
    for (var i in obj) {
        toReturn.push([i, obj[i]]);
        //console.log('THIS IS OTA in command find the keys>> >> >> ', obj);
    }
    return toReturn;
};

// Finds entire object based on value  and replaces the "name" variable
// Fix this to change any variable you choose
function findAndReplace(object, value, replacevalue) {
    for (var x in object) {
        if (typeof object[x] == typeof {}) {
            findAndReplace(object[x], value, replacevalue);
        }
        if (object[x] == value) {
            object.name = replacevalue;
            // break; // uncomment to stop after first replacement
        }
    }
}
//
//findAndReplace(myObject, "test1", "test dfasjkhHH45");

exports['default'] = ObjectToArray;
module.exports = exports['default'];

},{}],5:[function(require,module,exports){
'use strict';

var _interopRequireWildcard = function (obj) { return obj && obj.__esModule ? obj : { 'default': obj }; };

Object.defineProperty(exports, '__esModule', {
    value: true
});

var _ProjectDetails = require('./ProjectDetails');

var _ProjectDetails2 = _interopRequireWildcard(_ProjectDetails);

var _ProjectTasks = require('./ProjectTasks');

var _ProjectTasks2 = _interopRequireWildcard(_ProjectTasks);

var _ProjectConversation = require('./ProjectConversation');

var _ProjectConversation2 = _interopRequireWildcard(_ProjectConversation);

var ProjectBody = React.createClass({
    displayName: 'ProjectBody',

    getInitialState: function getInitialState() {
        var project = this.props.project[1];
        return {
            id: this.props.project[0],
            tasks: project.task,
            conversations: project.conversation
        };
    },
    render: function render() {
        var componentName = 'collapse-' + this.state.id;
        var tab1 = '#bosspos-projecter-tab-1-' + this.state.id;
        var tab2 = '#bosspos-projecter-tab-2-' + this.state.id;
        var tab3 = '#bosspos-projecter-tab-3-' + this.state.id;

        //console.log('this is how the props come through to ProjectBody.js ', this.props);

        return React.createElement(
            'div',
            { className: 'panel-collapse collapse', id: componentName, 'aria-expanded': 'false', style: { height: '0px' } },
            React.createElement(
                'div',
                { className: 'bg-dark' },
                React.createElement(
                    'div',
                    { className: 'tab-base accordion-tab-base tab-stacked-left bg-trans' },
                    React.createElement(
                        'ul',
                        { className: 'nav nav-tabs' },
                        React.createElement(
                            'li',
                            { className: 'active' },
                            React.createElement(
                                'a',
                                { 'data-toggle': 'tab', href: tab1, 'aria-expanded': 'true' },
                                'Details'
                            )
                        ),
                        React.createElement(
                            'li',
                            { className: '' },
                            React.createElement(
                                'a',
                                { 'data-toggle': 'tab', href: tab2, 'aria-expanded': 'false' },
                                'Tasks'
                            )
                        ),
                        React.createElement(
                            'li',
                            { className: '' },
                            React.createElement(
                                'a',
                                { 'data-toggle': 'tab', href: tab3, 'aria-expanded': 'false' },
                                'Notes'
                            )
                        )
                    ),
                    React.createElement(
                        'div',
                        { className: 'tab-content bg-gray-dark' },
                        React.createElement(_ProjectDetails2['default'], { project: this.props.project }),
                        React.createElement(_ProjectTasks2['default'], { project: this.props.project, tasks: this.state.tasks }),
                        React.createElement(_ProjectConversation2['default'], { project: this.props.project, conversations: this.state.conversations })
                    )
                )
            )
        );
    }
});
exports['default'] = ProjectBody;
module.exports = exports['default'];

},{"./ProjectConversation":7,"./ProjectDetails":8,"./ProjectTasks":9}],6:[function(require,module,exports){
'use strict';

Object.defineProperty(exports, '__esModule', {
    value: true
});
//import SubClass from './SubClass';

function ProjectCommand(newParts) {
    //alert(newParts);
    var users = $(bosspos.usersBasic);
    var projects = $(bosspos.projects);
    var projectCollection = {};
    var taskCollection = {};
    var conversationCollection = {};
    var conversationContainer = {};
    var messageCollection = {};

    for (var part in newParts) {

        var newPart = newParts[part][0];

        switch (newPart) {
            case 'message':
                var message = newPart;

                var messageLabel = 'message_' + messages[r].id;
                var messageToAdd = messages[r];
                messageCollection[messageLabel] = messageToAdd;
                break;
            case 'conversation':
                conversationCollection.push({ conversation: newPart });
                break;
            case 'task':
                taskCollection.push({ task: newPart });
                break;
            case 'project':
                projectCollection.push({ project: newPart });
                break;
            default:
                alert('no match');
        }
    }

    // iterate through collection and label each object for ease in search
    for (var i = 0; i < projects.length; i++) {
        var projectLabel = projects[i].id;
        var projectToAdd = projects[i];
        projectCollection[projectLabel] = projectToAdd;

        // set task array for sorting
        var tasks = projects[i].task;
        //for task loop
        for (var j = 0; j < tasks.length; j++) {
            var taskLabel = tasks[j].id;
            var taskToAdd = tasks[j];
            taskCollection[taskLabel] = taskToAdd;
        } // end for task

        // set Conversation array for sorting
        var conversations = projects[i].conversation;
        //for Conversation loop
        for (var k = 0; k < conversations.length; k++) {
            var conversationLabel = conversations[k].id;
            var conversationToAdd = conversations[k];
            conversationCollection[conversationLabel] = conversationToAdd;
            conversationContainer[conversationLabel] = conversationToAdd;

            // set messages array for sorting
            var messages = conversations[k].message;
            //for messages loop
            for (var r = 0; r < messages.length; r++) {
                var messageLabel = messages[r].id;
                var messageToAdd = messages[r];
                messageCollection[messageLabel] = messageToAdd;
            } // end for messages

            // Each loop insert the newly labeled object Save and clear the collector
            conversationCollection[conversationLabel].messages = messageCollection;
            conversationCollection = save(conversationCollection);
            messageCollection = {};
        } // end for Conversation

        // Each loop insert the newly labeled object Save and clear the collector
        projectCollection[projectLabel].tasks = taskCollection;
        projectCollection[projectLabel].conversations = conversationCollection;
        projectCollection = save(projectCollection);
        taskCollection = {};
        conversationCollection = {};
    } // end for project

    function save(jsonObj) {
        var jsonString = JSON.stringify(jsonObj);
        return JSON.parse(jsonString);
    }

    return {
        users: users,
        projects: projectCollection,
        //tasks: taskCollection,
        conversations: conversationContainer
        //messages: messageContainer
    };
}
// Push projects to array for mapping
var ObjectToArray = function ObjectToArray() {
    var obj = arguments[0] === undefined ? { you: 'fuck', now: 'off' } : arguments[0];

    var toReturn = [];
    for (var i in obj) {
        toReturn.push([i, obj[i]]);
        console.log('THIS IS OTA in command find the keys>> >> >> ', obj);
    }
    return toReturn;
};

exports['default'] = ProjectCommand;
module.exports = exports['default'];

},{}],7:[function(require,module,exports){
'use strict';

var _interopRequireWildcard = function (obj) { return obj && obj.__esModule ? obj : { 'default': obj }; };

Object.defineProperty(exports, '__esModule', {
    value: true
});

var _Conversation = require('./Conversation');

var _Conversation2 = _interopRequireWildcard(_Conversation);

var _ObjectToArray = require('./ObjectToArray');

var _ObjectToArray2 = _interopRequireWildcard(_ObjectToArray);

var ProjectConversation = React.createClass({
    displayName: 'ProjectConversation',

    getInitialState: function getInitialState() {
        var project = this.props.project[1];
        var conversations = new _ObjectToArray2['default'](project.conversations);
        //console.log("ProjectConversation ----------  ",conversations);
        return {
            id: this.props.project[0],
            tasks: project.task,
            conversations: conversations,
            conversation: {},
            newConversationBodyText: '',
            newConversationId: $(bosspos.messageCounter)[0]
        };
    },
    broadcast: function broadcast(newConversation) {
        console.log(newConversation);
        socket.emit('project:conversation', newConversation);
    },
    createNewConversation: function createNewConversation(e) {
        e.preventDefault();
        var newConversationBodyText = this.state.newConversationBodyText;
        var newConversationId = $(bosspos.conversationCounter)[0] + 1;
        console.log(this.props);
        var newConversation = ['message', {
            body: newConversationBodyText,
            className: 'info',
            project_id: this.props.project[1].id,
            created_at: 'time',
            deleted_at: null,
            id: newConversationId,
            subject: 'The teleprinter resists.',
            tagged_id: 1,
            updated_at: 'time',
            user_id: 1
        }];
        //console.log(newConversation);
        newConversationBodyText = '';
        this.setState({ newConversationBodyText: newConversationBodyText });
        this.broadcast(newConversation);
    },
    render: function render() {

        var tab = 'bosspos-projecter-tab-3-' + this.state.id;

        var newConversationList = (function (conversation) {
            conversation = conversation[1];
            //console.log("-> ProjectConversation -> ", conversation.messages);

            var messages = new _ObjectToArray2['default'](conversation.messages);

            return React.createElement(_Conversation2['default'], {
                id: conversation.id,
                project: this.props.project,
                title: conversation.title,
                description: conversation.description,
                className: conversation['class'],
                messages: messages,
                facility_id: conversation.facility_id,
                owner_id: conversation.owner_id,
                owner_type: conversation.owner_type,
                tagged_id: conversation.tagged_id,
                created_at: conversation.created_at,
                updated_at: conversation.updated_at,
                user_id: conversation.user_id
            });
        }).bind(this);

        return React.createElement(
            'div',
            { id: tab, className: 'tab-pane fade' },
            React.createElement(
                'div',
                { className: 'list-group ' },
                React.createElement(
                    'div',
                    { className: 'row mar-btm' },
                    React.createElement(
                        'div',
                        { className: 'col-md-12 mar-btm' },
                        React.createElement(
                            'button',
                            { className: 'btn btn-primary btn-block', onClick: this.createNewConversation },
                            React.createElement('span', { className: 'fa fa-plus' }),
                            ' Create A New Note'
                        )
                    ),
                    this.state.conversations.map(newConversationList)
                )
            )
        );
    }

});

exports['default'] = ProjectConversation;
module.exports = exports['default'];

},{"./Conversation":2,"./ObjectToArray":4}],8:[function(require,module,exports){
"use strict";

Object.defineProperty(exports, "__esModule", {
    value: true
});
//import SubClass from './SubClass';

var ProjectDetails = React.createClass({
    displayName: "ProjectDetails",

    getInitialState: function getInitialState() {
        var project = this.props.project[1];
        return {
            id: this.props.project[0],
            description: project.description,
            dueDate: project.due_date,
            dueTime: project.due_time
        };
    },
    render: function render() {
        var tab = "bosspos-projecter-tab-1-" + this.state.id;
        return React.createElement(
            "div",
            { id: tab, className: "tab-pane fade active in" },
            React.createElement(
                "p",
                null,
                this.state.description
            ),
            React.createElement(
                "p",
                null,
                "Due: ",
                this.state.dueDate
            ),
            React.createElement(
                "p",
                null,
                "At: ",
                this.state.dueTime
            )
        );
    }
});
exports["default"] = ProjectDetails;
module.exports = exports["default"];

},{}],9:[function(require,module,exports){
"use strict";

var _interopRequireWildcard = function (obj) { return obj && obj.__esModule ? obj : { "default": obj }; };

Object.defineProperty(exports, "__esModule", {
    value: true
});

var _Task = require("./Task");

var _Task2 = _interopRequireWildcard(_Task);

var ProjectTasks = React.createClass({
    displayName: "ProjectTasks",

    getInitialState: function getInitialState() {
        var project = this.props.project[1];

        return {
            id: this.props.project[0],
            tasks: project.task,
            conversations: project.conversation
        };
    },
    render: function render() {

        var tab = "bosspos-projecter-tab-2-" + this.state.id;

        var newTaskList = function newTaskList(task) {

            return React.createElement(_Task2["default"], {
                id: task.id,
                title: task.title,
                description: task.description,
                className: task.className,
                dueDate: task.dueDate,
                dueTime: task.dueTime
            });
        };
        //console.log('This is in ProjectTasks >> >> >>', this.state.tasks);

        return React.createElement(
            "div",
            { id: tab, className: "tab-pane fade" },
            React.createElement(
                "div",
                { className: "list-group bg-dark" },
                this.state.tasks.map(newTaskList)
            )
        );
    }

});

exports["default"] = ProjectTasks;
module.exports = exports["default"];

},{"./Task":12}],10:[function(require,module,exports){
"use strict";

var _interopRequireWildcard = function (obj) { return obj && obj.__esModule ? obj : { "default": obj }; };

Object.defineProperty(exports, "__esModule", {
    value: true
});

var _ProjectBody = require("./ProjectBody");

var _ProjectBody2 = _interopRequireWildcard(_ProjectBody);

var ProjectTitle = React.createClass({
    displayName: "ProjectTitle",

    getInitialState: function getInitialState() {
        //console.log('t@@@ ProjectTitle.js -->', this.props.project[1].class);
        return {
            id: this.props.project[0],
            className: this.props.project[1]["class"]
        };
    },
    render: function render() {
        var classString = "panel panel-bordered panel-" + this.state.className;
        var componentName = "#collapse-" + this.state.id;
        //console.log('t@@@ ProjectTitle.js -->', componentName);
        return React.createElement(
            "div",
            { className: classString },
            React.createElement(
                "div",
                { className: "panel-heading" },
                React.createElement(
                    "h4",
                    { className: "panel-title" },
                    React.createElement(
                        "a",
                        { "data-parent": "#accordion", "data-toggle": "collapse", href: componentName, "aria-expanded": "false", className: "collapsed" },
                        this.props.title
                    )
                )
            ),
            React.createElement(_ProjectBody2["default"], { project: this.props.project })
        );
    }
});

exports["default"] = ProjectTitle;
module.exports = exports["default"];

},{"./ProjectBody":5}],11:[function(require,module,exports){
'use strict';

var _interopRequireWildcard = function (obj) { return obj && obj.__esModule ? obj : { 'default': obj }; };

Object.defineProperty(exports, '__esModule', {
    value: true
});

var _Tasker = require('./Tasker');

var _Tasker2 = _interopRequireWildcard(_Tasker);

var _ProjectTitle = require('./ProjectTitle');

var _ProjectTitle2 = _interopRequireWildcard(_ProjectTitle);

var _ProjectCommand = require('./ProjectCommand');

var _ProjectCommand2 = _interopRequireWildcard(_ProjectCommand);

var _ObjectToArray = require('./ObjectToArray');

var _ObjectToArray2 = _interopRequireWildcard(_ObjectToArray);

var Projecter = React.createClass({
    displayName: 'Projecter',

    getInitialState: function getInitialState() {
        var projectCollections = new _ProjectCommand2['default']();

        // LISTENING to Project Events
        socket.on(['newProjectConversation'], (function (message) {
            console.log('This is newProjectConversation caught by socket in Projecter.js  :', message[1]);
            this.addConversation(message);
            $.niftyNoty({ type: 'info', message: message[1].id, container: 'floating', closeBtn: true, timer: 4000 });
        }).bind(this)).on(['newProjectMessage'], (function (message) {
            //console.log('This is newProjectMessage caught by socket in Projecter.js  :', message[1][1]);
            this.addMessage(message);
            $.niftyNoty({ type: 'info', message: message[1][1], container: 'floating', closeBtn: true, timer: 4000 });
        }).bind(this)).on(['projectMessageChange'], (function (message) {
            this.updateMessage({ message: message });
        }).bind(this));

        var projectArray = new _ObjectToArray2['default'](projectCollections.projects);
        //console.log('THIS IS IN PROJECTER >> >> >> ',   projects);

        return {
            projectArray: projectArray,
            users: projectCollections.users,
            projects: projectCollections.projects,
            conversations: projectCollections.conversations
        };
    },
    addConversation: function addConversation(message) {
        var project_id = this.state.conversations[message[1].project_id].owner_id;
        console.log('THIS IS IN PROJECTER>> >> >> ', this.state.conversations);
        var insertProject = this.state.projects[project_id].conversations[message[1].conversation_id].messages[message[1].id] = message[1];
        var projectArray = new _ObjectToArray2['default'](this.state.projects);
        var projects = this.state.projects;
        this.setState({ projectArray: projectArray, projects: projects });
        //console.log('THIS IS IN PROJECTER>> >> >> ', this.state.projects);
    },
    updateMessage: function updateMessage(message) {
        //console.log('THIS IS IN PROJECTER>> >> >> ', message.message);
        message = message.message;
        var project_id = this.state.conversations[message[1].conversation_id].owner_id;
        var insertProject = this.state.projects[project_id].conversations[message[1].conversation_id].messages[message[1].id] = message[1]; // = message[1];
        var projects = this.state.projects;
        this.setState({ projects: projects });
    },
    addMessage: function addMessage(message) {
        var project_id = this.state.conversations[message[1].conversation_id].owner_id;
        var insertProject = this.state.projects[project_id].conversations[message[1].conversation_id].messages[message[1].id] = message[1];
        var projectArray = new _ObjectToArray2['default'](this.state.projects);
        var projects = this.state.projects;
        this.setState({ projectArray: projectArray, projects: projects });
        //console.log('THIS IS IN PROJECTER>> >> >> ', this.state.projects);
    },
    render: function render() {

        var newProjectTitle = function newProjectTitle(project) {
            return React.createElement(_ProjectTitle2['default'], { project: project, title: project[1].title });
        };

        return React.createElement(
            'div',
            { className: 'panel-group accordion', id: 'accordion' },
            this.state.projectArray.map(newProjectTitle),
            React.createElement('div', null)
        );
    }

});
exports['default'] = Projecter;
module.exports = exports['default'];

},{"./ObjectToArray":4,"./ProjectCommand":6,"./ProjectTitle":10,"./Tasker":15}],12:[function(require,module,exports){
"use strict";

Object.defineProperty(exports, "__esModule", {
    value: true
});
//import SubClass from './SubClass';

var Task = React.createClass({
    displayName: "Task",

    getInitialState: function getInitialState() {

        return {
            classVars: []
        };
    },
    render: function render() {
        return React.createElement(
            "div",
            { className: "row mar-btm" },
            React.createElement(
                "div",
                { className: "col-sm-12" },
                React.createElement(
                    "a",
                    { className: "col-sm-12 list-group-item mar-no" },
                    React.createElement(
                        "div",
                        { className: "btn-group btn-group-vertical pull-right mar-lft" },
                        React.createElement(
                            "button",
                            { className: "btn btn-mint" },
                            React.createElement("span", { className: "fa fa-edit" }),
                            " Edit"
                        ),
                        React.createElement(
                            "button",
                            { className: "btn btn-mint" },
                            React.createElement("span", { className: "fa fa-user" }),
                            " Delegate"
                        ),
                        React.createElement(
                            "button",
                            { className: "btn btn-mint" },
                            React.createElement("span", { className: "fa fa-delete" }),
                            " Delete"
                        )
                    ),
                    React.createElement(
                        "h4",
                        { className: "list-group-item-heading text-thin" },
                        this.props.title
                    ),
                    React.createElement(
                        "p",
                        { className: "list-group-item-text" },
                        this.props.description
                    )
                )
            )
        );
    }

});

exports["default"] = Task;
module.exports = exports["default"];

},{}],13:[function(require,module,exports){
"use strict";

Object.defineProperty(exports, "__esModule", {
    value: true
});
var TaskList = React.createClass({
    displayName: "TaskList",

    render: function render() {

        var displayTask = function displayTask(task) {
            return React.createElement(
                "div",
                { className: "list-group-item-default mar-btm" },
                React.createElement(
                    "label",
                    { className: "form-checkbox form-icon form-primary active form-text" },
                    React.createElement("input", { type: "checkbox" })
                ),
                React.createElement(
                    "span",
                    { className: "text-center text-bold" },
                    task
                ),
                React.createElement(
                    "span",
                    { className: "badge badge-info pull-right" },
                    "11"
                )
            );
        };

        return React.createElement(
            "div",
            { className: "task-list" },
            React.createElement(
                "div",
                { className: "list-group" },
                this.props.items.map(displayTask),
                React.createElement("div", { className: "d" })
            )
        );
    }

});

exports["default"] = TaskList;
module.exports = exports["default"];

},{}],14:[function(require,module,exports){
'use strict';

var _interopRequireWildcard = function (obj) { return obj && obj.__esModule ? obj : { 'default': obj }; };

Object.defineProperty(exports, '__esModule', {
    value: true
});

var _TaskList = require('./TaskList');

var _TaskList2 = _interopRequireWildcard(_TaskList);

var TaskSystem = React.createClass({
    displayName: 'TaskSystem',

    getInitialState: function getInitialState() {

        socket.on('newTask', (function (message) {
            console.log('This is newTask firing in receiveEvent.js :', message);

            this.addTask(message);

            $.niftyNoty({
                type: 'info',
                message: message.task,
                container: 'floating',
                closeBtn: true
            });
        }).bind(this));

        return {
            items: [],
            task: ''
        };
    },
    onChange: function onChange(e) {

        var task = e.target.value;

        this.setState({ task: task });
    },
    broadcast: function broadcast(e) {

        socket.emit('taskCreated', { task: this.state.task });

        e.preventDefault();
    },
    addTask: function addTask(task) {

        var items = this.state.items.concat([task]);

        task = '';

        this.setState({ items: items, task: task });
    },
    removeTask: function removeTask(e) {

        e.preventDefault();
    },
    render: function render() {
        return React.createElement(
            'div',
            { className: 'panel panel-dark' },
            React.createElement(
                'div',
                { className: 'panel-heading' },
                React.createElement(
                    'div',
                    { className: 'panel-control' },
                    React.createElement(
                        'div',
                        { className: 'btn-group' },
                        React.createElement(
                            'button',
                            { 'data-toggle': 'dropdown', className: 'dropdown-toggle btn btn-info' },
                            React.createElement('i', { className: 'fa fa-gear fa-lg' })
                        ),
                        React.createElement(
                            'ul',
                            { className: 'dropdown-menu dropdown-menu-right bg-dark' },
                            React.createElement(
                                'li',
                                null,
                                React.createElement(
                                    'a',
                                    { href: '#' },
                                    'Action'
                                )
                            ),
                            React.createElement(
                                'li',
                                null,
                                React.createElement(
                                    'a',
                                    { href: '#' },
                                    'Another action'
                                )
                            ),
                            React.createElement(
                                'li',
                                null,
                                React.createElement(
                                    'a',
                                    { href: '#' },
                                    'Something else here'
                                )
                            ),
                            React.createElement('li', { className: 'divider' }),
                            React.createElement(
                                'li',
                                null,
                                React.createElement(
                                    'a',
                                    { href: '#' },
                                    'Separated link'
                                )
                            )
                        )
                    )
                ),
                React.createElement(
                    'h2',
                    { className: 'panel-title' },
                    'Tasker'
                )
            ),
            React.createElement(
                'div',
                { className: 'panel-body bg-dark' },
                React.createElement(_TaskList2['default'], { items: this.state.items }),
                React.createElement(
                    'form',
                    { className: 'form-horizontal bg-trans bord-btm board-top', onSubmit: this.broadcast },
                    React.createElement(
                        'div',
                        { className: 'input-group mar-btm' },
                        React.createElement(
                            'span',
                            { className: 'input-group-btn' },
                            React.createElement(
                                'button',
                                { className: 'btn btn-primary', type: 'submit' },
                                React.createElement('span', { className: 'fa fa-plus' })
                            )
                        ),
                        React.createElement('input', { className: 'form-control', onChange: this.onChange, value: this.state.task })
                    )
                )
            )
        );
    }

});

exports['default'] = TaskSystem;
module.exports = exports['default'];

},{"./TaskList":13}],15:[function(require,module,exports){
'use strict';

var _interopRequireWildcard = function (obj) { return obj && obj.__esModule ? obj : { 'default': obj }; };

Object.defineProperty(exports, '__esModule', {
    value: true
});

var _TaskList = require('./TaskList');

var _TaskList2 = _interopRequireWildcard(_TaskList);

var Tasker = React.createClass({
    displayName: 'Tasker',

    render: function render() {
        return React.createElement(
            'div',
            null,
            'NewClass'
        );
    }

});

exports['default'] = Tasker;
module.exports = exports['default'];

},{"./TaskList":13}]},{},[1]);
