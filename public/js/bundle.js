(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

var _interopRequireWildcard = function (obj) { return obj && obj.__esModule ? obj : { 'default': obj }; };

var _TaskSystem = require('./react/projects/TaskSystem');

var _TaskSystem2 = _interopRequireWildcard(_TaskSystem);

var _Projecter = require('./react/projects/Projecter');

var _Projecter2 = _interopRequireWildcard(_Projecter);

React.render(React.createElement(_TaskSystem2['default'], null), document.querySelector('#TaskSystem'));
React.render(React.createElement(_Projecter2['default'], null), document.querySelector('#ProjecterDirectory'));

},{"./react/projects/Projecter":9,"./react/projects/TaskSystem":12}],2:[function(require,module,exports){
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

        return {
            messages: this.props.messages,
            message: {},
            bodyText: ''

        };
    },
    onChange: function onChange(e) {

        var bodyText = e.target.value;

        this.setState({ bodyText: bodyText });
    },
    broadcast: function broadcast() {},
    createNewMessage: function createNewMessage(e) {

        e.preventDefault();

        var message = {
            id: 41,
            subject: 'New Message',
            body: this.state.bodyText,
            conversation_id: this.props.id,
            user: 1,
            className: 'info'
        };

        console.log(message);

        this.broadcast();
    },
    addMessage: function addMessage(message) {

        var messages = this.state.messages.concat(message);

        message = {};

        this.setState({ messages: messages, message: message });
    },
    render: function render() {

        var newMessageList = function newMessageList(message) {

            return React.createElement(_Message2['default'], {
                id: message.id,
                subject: message.subject,
                body: message.body,
                user: message.user_id,
                className: message['class']
            });
        };

        return React.createElement(
            'div',
            { className: 'col-sm-12 mar-btm' },
            React.createElement(
                'a',
                { className: 'col-sm-12 list-group-item mar-no' },
                React.createElement(
                    'div',
                    { className: 'bord-btm mar-btm' },
                    React.createElement(
                        'h4',
                        { className: 'list-group-item-heading text-thin' },
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
                ),
                React.createElement(
                    'div',
                    { className: 'bg-gray-light bord-top mar-top' },
                    React.createElement(
                        'div',
                        { className: 'btn-group pull-right' },
                        React.createElement(
                            'button',
                            { className: 'btn btn-mint' },
                            React.createElement('span', { className: 'fa fa-edit' }),
                            ' Edit'
                        ),
                        React.createElement(
                            'button',
                            { className: 'btn btn-danger' },
                            React.createElement('span', { className: 'fa fa-close' }),
                            ' Delete'
                        )
                    )
                )
            ),
            this.state.messages.map(newMessageList),
            React.createElement(
                'form',
                { className: 'form-horizontal bg-trans bord-btm board-top', onSubmit: this.createNewMessage },
                React.createElement(
                    'div',
                    { className: 'input-group mar-btm' },
                    React.createElement(
                        'span',
                        { className: 'input-group-btn' },
                        React.createElement(
                            'button',
                            { className: 'btn btn-primary pull-right', type: 'submit' },
                            React.createElement('span', { className: 'fa fa-plus' }),
                            ' Comment'
                        )
                    ),
                    React.createElement('input', { className: 'form-control', onChange: this.onChange, value: this.state.bodyText }),
                    React.createElement('input', { name: 'conversation_id', type: 'hidden', value: { conversation_id: this.props.id } })
                )
            )
        );
    }

});

exports['default'] = Conversation;
module.exports = exports['default'];

//socket.emit('project:message', {bodyText:(this.state.bodyText)});

},{"./Message":3}],3:[function(require,module,exports){
"use strict";

Object.defineProperty(exports, "__esModule", {
    value: true
});
//import SubClass from './SubClass';

var Message = React.createClass({
    displayName: "Message",

    getInitialState: function getInitialState() {

        return {
            classVars: []
        };
    },
    render: function render() {
        return React.createElement(
            "a",
            { className: "col-sm-12 list-group-item mar-no" },
            React.createElement(
                "div",
                { className: "user-stamp col-md-3 board-all" },
                React.createElement("img", { className: "img align-center img-sm img-circle", src: "/img/av3.png" }),
                React.createElement(
                    "h4",
                    { className: "text-thin" },
                    "User Name"
                ),
                React.createElement("span", { className: "fa fa-logged-in" }),
                React.createElement(
                    "div",
                    { className: "btn-group " },
                    React.createElement(
                        "button",
                        { className: "btn btn-sm btn-primary" },
                        React.createElement("span", { className: "fa fa-user" }),
                        " Profile"
                    ),
                    React.createElement(
                        "button",
                        { className: "btn btn-sm btn-primary" },
                        React.createElement("span", { className: "fa fa-message" }),
                        " Message"
                    )
                )
            ),
            React.createElement(
                "div",
                { className: "col-md-9 board-rgt" },
                React.createElement(
                    "p",
                    null,
                    "Message content and stuff... Die calmly like a dead lagoon. Chocolate stew has to have a dried, delicious oysters component."
                ),
                React.createElement(
                    "div",
                    { className: "bg-gray-light bord-top mar-top" },
                    React.createElement(
                        "div",
                        { className: "btn-group pull-right" },
                        React.createElement(
                            "button",
                            { className: "btn btn-mint" },
                            React.createElement("span", { className: "fa fa-edit" }),
                            " Edit"
                        ),
                        React.createElement(
                            "button",
                            { className: "btn btn-danger" },
                            React.createElement("span", { className: "fa fa-close" }),
                            " Delete"
                        )
                    )
                )
            )
        );
    }

});

exports["default"] = Message;
module.exports = exports["default"];

},{}],4:[function(require,module,exports){
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

        return {
            classVars: []
        };
    },
    render: function render() {
        var componentName = 'collapse-' + this.props.id;
        var tab1 = '#bosspos-projecter-tab-1-' + this.props.id;
        var tab2 = '#bosspos-projecter-tab-2-' + this.props.id;
        var tab3 = '#bosspos-projecter-tab-3-' + this.props.id;

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
                        React.createElement(_ProjectDetails2['default'], {
                            id: this.props.id,
                            description: this.props.description,
                            dueDate: this.props.dueDate,
                            dueTime: this.props.dueTime
                        }),
                        React.createElement(_ProjectTasks2['default'], {
                            id: this.props.id,
                            tasks: this.props.tasks
                        }),
                        React.createElement(_ProjectConversation2['default'], {
                            id: this.props.id,
                            conversations: this.props.conversations
                        })
                    )
                )
            )
        );
    }

});

exports['default'] = ProjectBody;
module.exports = exports['default'];

},{"./ProjectConversation":5,"./ProjectDetails":6,"./ProjectTasks":7}],5:[function(require,module,exports){
"use strict";

var _interopRequireWildcard = function (obj) { return obj && obj.__esModule ? obj : { "default": obj }; };

Object.defineProperty(exports, "__esModule", {
    value: true
});

var _Conversation = require("./Conversation");

var _Conversation2 = _interopRequireWildcard(_Conversation);

var ProjectConversation = React.createClass({
    displayName: "ProjectConversation",

    getInitialState: function getInitialState() {

        return {
            conversations: this.props.conversations
        };
    },
    render: function render() {

        var tab = "bosspos-projecter-tab-3-" + this.props.id;

        var newConversationList = function newConversationList(conversation) {

            return React.createElement(_Conversation2["default"], {
                id: conversation.id,
                title: conversation.title,
                description: conversation.description,
                className: conversation["class"],
                messages: conversation.message,
                facility_id: conversation.facility_id,
                owner_id: conversation.owner_id,
                owner_type: conversation.owner_type,
                tagged_id: conversation.tagged_id,
                created_at: conversation.created_at,
                updated_at: conversation.updated_at,
                user_id: conversation.user_id
            });
        };

        return React.createElement(
            "div",
            { id: tab, className: "tab-pane fade" },
            React.createElement(
                "div",
                { className: "list-group bg-dark" },
                React.createElement(
                    "div",
                    { className: "row mar-btm" },
                    React.createElement(
                        "div",
                        { className: "col-sm-12 mar-btm" },
                        React.createElement(
                            "button",
                            { className: "btn btn-primary btn-block" },
                            React.createElement("span", { className: "fa fa-plus" }),
                            " New Note"
                        )
                    ),
                    this.state.conversations.map(newConversationList)
                )
            )
        );
    }

});

exports["default"] = ProjectConversation;
module.exports = exports["default"];

},{"./Conversation":2}],6:[function(require,module,exports){
"use strict";

Object.defineProperty(exports, "__esModule", {
    value: true
});
//import SubClass from './SubClass';

var ProjectDetails = React.createClass({
    displayName: "ProjectDetails",

    render: function render() {

        var tab = "bosspos-projecter-tab-1-" + this.props.id;

        return React.createElement(
            "div",
            { id: tab, className: "tab-pane fade active in" },
            React.createElement(
                "p",
                null,
                this.props.description
            ),
            React.createElement(
                "p",
                null,
                this.props.dueDate
            ),
            React.createElement(
                "p",
                null,
                this.props.dueTime
            )
        );
    }

});

exports["default"] = ProjectDetails;
module.exports = exports["default"];

},{}],7:[function(require,module,exports){
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

        return {
            tasks: this.props.tasks
        };
    },
    render: function render() {

        var tab = "bosspos-projecter-tab-2-" + this.props.id;

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
        //console.log(this.props.tasks);

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

},{"./Task":10}],8:[function(require,module,exports){
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

        return {
            project: []
        };
    },
    render: function render() {
        var classString = "panel panel-bordered panel-" + this.props.className;

        var componentName = "#collapse-" + this.props.id;

        //console.log('this is how the props come through to ProjectTitle.js ', this.props);

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
            React.createElement(_ProjectBody2["default"], {
                id: this.props.id,
                description: this.props.description,
                dueDate: this.props.dueDate,
                dueTime: this.props.dueTime,
                tasks: this.props.tasks,
                conversations: this.props.conversations
            })
        );
    }

});

exports["default"] = ProjectTitle;
module.exports = exports["default"];

},{"./ProjectBody":4}],9:[function(require,module,exports){
'use strict';

var _interopRequireWildcard = function (obj) { return obj && obj.__esModule ? obj : { 'default': obj }; };

Object.defineProperty(exports, '__esModule', {
    value: true
});

var _Tasker = require('./Tasker');

var _Tasker2 = _interopRequireWildcard(_Tasker);

var _ProjectTitle = require('./ProjectTitle');

var _ProjectTitle2 = _interopRequireWildcard(_ProjectTitle);

var Projecter = React.createClass({
    displayName: 'Projecter',

    getInitialState: function getInitialState() {
        var projects = $(bosspos.projects);
        var project = $(bosspos.project);
        var projectCollection = [];
        var taskCollection = [];
        var conversationCollection = [];
        var messageCollection = [];

        console.log('THIS IS IN PROJECTER>JS ', project);

        for (var i = 0; i < project.length; i++) {
            var objectLabel = 'project_' + project[i].id;
            projectCollection.push([function (objectLabel) {
                return project[i];
            }]);

            console.log('THIS IS IN PROJECTER>> >> >> ', projectCollection);

            // set task array for sorting
            var task = projects[i].task;
            //for task loop
            for (var j = 0; j < task.length; j++) {
                taskCollection.push(['task_' + task[j].id(), {
                    id: task[i].id,
                    title: task[i].title,
                    description: task[i].description,
                    className: task[i]['class'],
                    dueDate: task[i].due_date,
                    dueTime: task[i].due_time,
                    creator_id: task[i].creator_id,
                    owner_id: task[i].owner_id,
                    project_id: task[i].project_id,
                    conversation_id: task[i].conversation_id,
                    facility_id: task[i].facility_id,
                    created_at: task[i].created_at,
                    updated_at: task[i].updated_at,
                    deleted_at: task[i].deleted_at
                }]);
            } // end for task

            // set task array for sorting
            var task = projects[i].task;
            //for task loop
            for (var j = 0; j < task.length; j++) {
                taskCollection.push(['task_' + task[j].id(), {
                    id: task[i].id,
                    title: task[i].title,
                    description: task[i].description,
                    className: task[i]['class'],
                    dueDate: task[i].due_date,
                    dueTime: task[i].due_time,
                    creator_id: task[i].creator_id,
                    owner_id: task[i].owner_id,
                    project_id: task[i].project_id,
                    conversation_id: task[i].conversation_id,
                    facility_id: task[i].facility_id,
                    created_at: task[i].created_at,
                    updated_at: task[i].updated_at,
                    deleted_at: task[i].deleted_at
                }]);
            } // end for task
        } // end for project

        // LISTENING Project
        socket.on(['newProjectMessage'], (function (message) {
            console.log('This is newProjectMessage firing in Conversation.js :', message);
            this.addMessage(message);
            $.niftyNoty({ type: 'info', message: message.message, container: 'floating', closeBtn: true, timer: 4000 });
        }).bind(this));

        this.findMessageLocation(projectCollection);

        return {
            projects: projectCollection
        };
    },
    makeMessage: function makeMessage() {

        return newMessage = {
            id: 41,
            subject: 'New Message',
            body: this.state.bodyText,
            conversation_id: this.props.id,
            user: 1,
            className: 'info'
        };
    },
    findMessageLocation: function findMessageLocation(projects) {
        var owningProject = projects.lastIndexOf('info');
        console.log('this is the owning project found in findMessageLocation ', owningProject);
    },
    render: function render() {

        var newProjectTitle = function newProjectTitle(project) {
            return React.createElement(_ProjectTitle2['default'], {
                id: project[1].id,
                title: project[1].title,
                description: project[1].description,
                className: project[1].className,
                dueDate: project[1].dueDate,
                dueTime: project[1].dueTime,
                tasks: project[1].tasks,
                conversations: project[1].conversations,
                task_id: project[1].task_id,
                conversation_id: project[1].conversation_id,
                deligated_id: project[1].deligated_id,
                creator_id: project[1].creator_id,
                owner_id: project[1].owner_id,
                facility_id: project[1].facility_id,
                created_at: project[1].created_at,
                updated_at: project[1].updated_at,
                deleted_at: project[1].deleted_at,
                user_id: project[1].user_id
            });
        };

        return React.createElement(
            'div',
            { className: 'panel-group accordion', id: 'accordion' },
            this.state.projects.map(newProjectTitle)
        );
    }

});

exports['default'] = Projecter;
module.exports = exports['default'];

},{"./ProjectTitle":8,"./Tasker":13}],10:[function(require,module,exports){
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

},{}],11:[function(require,module,exports){
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

},{}],12:[function(require,module,exports){
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

},{"./TaskList":11}],13:[function(require,module,exports){
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

},{"./TaskList":11}]},{},[1]);
