///////////////////////////////////////////////////////////////
/* React system [ START ]
import TaskSystem from './react/projects/TaskSystem';
import Projecter from './react/projects/Projecter';

React.render(<TaskSystem />, document.querySelector('#TaskSystem') );
React.render(<Projecter />, document.querySelector('#ProjecterDirectory') );
// React system [ END ] */
//////////////////////////////////////////////////////////////
//var Vue = require('vue');

//Vue.use(require('vue-resource'));


Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

Vue.component('task', {
    template:
    '<div id="taskTemplate" class="row mar-btm"> ' +
    '<div class="col-sm-12"> ' +
    '<a class="col-sm-12 list-group-item mar-no"> ' +
    '<input ' +
    'class="col-sm-12 list-group-item-heading form-textarea project-message-body" ' +
    'v-model="thisTask.title" /> ' +
    '<textarea ' +
    'class="col-sm-12 list-group-item-text form-textarea project-message-body"' +
    'v-model="thisTask.description"' +
    'v-on="keyup: projectChanged"' +
    'onload="autosize(this)"> ' +
    '</textarea> ' +
    '</a> ' +
    '</div> ' +
    '<div class="btn-group mar-lft"> ' +
    '<button class="btn btn-mint mar-rgt"><span class="fa fa-user"></span> Delegate</button> ' +
    '<button class="btn btn-danger"><span class="fa fa-close"></span> Delete</button> ' +
    '</div> ' +
    '</div>' ,
    inherit: true,
    props:{
        thisTask:{
            type: Object
        },
        parentId: {
            type: Number,
            required: true
        },
        currentUser: {
            type: Number,
            required: true
        }
    }
})

Vue.component('project', {
    template:
        '<div ' +
        'class="panel panel-bordered panel-{{ thisProject.class }}"' +
        'v-show="isVisible: showProject"' +
        '>' +
        '<div class="panel-heading"> ' +
        '<h4 class="panel-title"> ' +

        '<a ' +
        'data-parent="#accordion" ' +
        'v-on="click: fixSize" ' +
        'data-toggle="collapse" ' +
        'href="#project{{ thisProject.id }}" ' +
        'class="collapsed" ' +
        'aria-expanded="false">' +
        '<input ' +
        'class="form-textarea project-message-body" ' +
        'v-on="keyup: projectChanged  " ' +
        'v-model="thisProject.title" ' +
        'disabled ' +
        '/> ' +
        '</a> ' +
        '</h4> ' +
        '<button class="btn btn-danger" v-on="click: deleteThis" ><span class="fa fa-close"></span> Delete</button>' +
        '</div>' +
        '<!--Accordion content collapsible container--> ' +
        '<div class="panel-collapse collapse" id="project{{ thisProject.id }}" aria-expanded="false" style="height: 0px;"> ' +
        '<div class="bg-dark"> ' +
        '<div class="tab-base accordion-tab-base tab-stacked-left bg-trans"> ' +
        '<!--Project Navigation Tabs--> ' +
        '<ul class="nav nav-tabs"> ' +
        '<li class="active"><a data-toggle="tab" href="#project{{ thisProject.id }}-details" aria-expanded="true">Details</a></li> ' +
        '<li class=""><a data-toggle="tab" href="#project{{ thisProject.id }}-tasks" aria-expanded="false">Tasks</a></li> ' +
        '<li class=""><a data-toggle="tab" href="#project{{ thisProject.id }}-notes" aria-expanded="false">Notes</a></li></ul> ' +
        '<!--Tab Content--> ' +
        '<div class="tab-content bg-gray-dark"> ' +
        '<!-- Details --> ' +
        '<div id="project{{ thisProject.id }}-details" class="tab-pane fade active in"> ' +
        '<textarea ' +
        'rows="6"' +
        'v-model="thisProject.description" ' +
        'id="description{{ thisProject.id }}" ' +
        'class="col-sm-12 list-group-item-text form-textarea project-message-body"' +
        'v-on="keyup: projectChanged "' +
        '>' +
        '</textarea> ' +
        '<input class="form-textarea project-message-body" v-on="keyup: projectChanged" v-model="thisProject.updated_at" disabled /> ' +
        '</div> ' +
        '<!-- Details -->' +
        '<!-- Tasks --> ' +
        '<div id="project{{ thisProject.id }}-tasks" class="tab-pane fade"> ' +
        '<div class="list-group bg-dark"> ' +
        '<button class="btn btn-block btn-info mar-btm" v-on="click: createNewTask(thisProject.id, thisProject.conversation_id, currentUser)">New Task</button> ' +
        '<div v-repeat="task in tasks" >' +
        '<task ' +
        'v-repeat="task in tasks" ' +
        'current-user="{{ currentUser }}" ' +
        'parent-id="{{ thisProject.id }}"' +
        'this-task="{{ task }}"' +
        '>' +
        '</div>' +
        '</task> ' +
        '</div> ' +
        '</div> ' +
        '<!-- Tasks end -->' +
        '<div id="project{{ thisProject.id }}-notes" class="tab-pane fade"> ' +
        '<div class="list-group bg-dark"> ' +
        '<!-- conversation start --> ' +
        '<button class="btn btn-block btn-info mar-btm">New Note</button> ' +
        '<div v-repeat="conversation"> ' +
        '<div class="row mar-btm" > ' +
        '<div class="mar-lft"> ' +
        '<button class="btn btn-danger"><span class="fa fa-close"></span> Delete</button> ' +
        '</div> ' +
        '<div class="col-sm-12"> ' +
        '<a class="col-sm-12  list-group-item mar-no"> ' +
        '<div class="col-sm-3 bord-rgt pull-left"> ' +
        '<img src="/img/av1.png"> ' +
        '<h4>Name</h4> ' +
        '</div> ' +
        '<input class="col-sm-9 list-group-item-heading form-textarea project-message-body" v-model="title" /> ' +
        '<textarea class="col-sm-9 list-group-item-text form-textarea project-message-body "' +
        'v-model="description"' +
        'v-on="keyup: projectChanged">' +
        '</textarea> ' +
        '</a> ' +
        '</div> ' +
        '</div> ' +
        '<!-- notes start --> ' +
        '<div class="timeline"> ' +
        '<div class="timeline-header"> ' +
        '<div class="timeline-entry" v-repeat="message"> ' +
        '<div class="timeline-stat"> ' +
        '<div class="timeline-icon"> ' +
        '<img src="img/av4.png" alt="Image" /> ' +
        '</div> ' +
        '<div class="timeline-time">3 Hours ago</div> ' +
        '</div> ' +
        '<div class="timeline-label"> ' +
        '<div class="btn-group pull-right"> ' +
        '<button class="btn btn-sm btn-mint"><span class="fa fa-edit"></span></button> ' +
        '<button class="btn btn-sm btn-danger"><span class="fa fa-close"></span></button> ' +
        '</div> ' +
        '<span class="mar-no pad-btm"><a href="#" class="btn-link primary text-semibold">Lisa D.</a> added this note to <a href="#">This Project this conversation</a></span> ' +
        '<div class="input-group display-flex"> ' +
        '<textarea class="form-control form-textarea project-message-body"></textarea> ' +
        '</div> ' +
        '</div> ' +
        '</div> ' +
        '<button className="btn btn-primary " ><span className="fa fa-plus"></span> Comment</button> ' +
        '</div> ' +
        '</div> ' +
        '<!-- notes end  --> ' +
        '</div> ' +
        '<!-- conversation end --> ' +
        '</div> ' +
        '</div> ' +
        '</div>' +
        '</div>' +
        '</div>',
        //document.querySelector('#projectTemplate'),
    inherit: true,
    props: {
        onDelete: {},
        onChange: {},
        thisProject: {
            type: Object
        },
        currentUser: {
            type: Number
        }
    },
    data: function() {
        return {
            dis: 'worked?',
            tasks: []
        }
    },
    computed: {
        showProject: function(){
            if(this.thisProject.deleted_at == null || this.showDeleted){
                return true;
            }
            return false;
        }
    },
    methods: {
        projectChanged: function(e) {
            //this.$http.post('/api/projects', this.projects);
            if(e.target.type == 'textarea'){autosize(e.target)}
            console.log(e.target);
            this.onChange(this.thisProject);
        },
        fixSize: function(e){
            //var textFieldId = '#description' + this.thisProject.id;
            //var textField = (e.path[4].children[0].children[1].children[0].children[0].children[1].children[0].children[0].id);
            //console.log(textField);
            //e.path[4].children[0].children[1].children[0].children[0].children[1].children[0].children[0];
            //document.querySelectorAll('textarea');

        },
        fetchTasks: function(){
            this.$http.get('/api/tasks', function (tasks) {
                this.$set('tasks', tasks);
            })
        },
        deleteThis: function(e){
            console.log(e);
            //this.projects.splice((e.path[2].id - 1), 1)
            this.onDelete(e.path[2]);
        },
        checkVisible: function(){
            if(this.thisProject.deleted_at == null || this.showDeleted){
                this.isVisible = true;
            }

                //this.isVisible = ;

        }

    },
    ready: function(){
        //this.checkVisible();


        this.fetchTasks();
    }
})


Vue.filter('deleted', function (value) {
    //console.log('checkId filter in app.js ', value);
    var newList = [];
    var i = 0;
    for(i in value){
        //console.log('checkId filter in app.js ', value[i]);
        //if(value[i].deleted_at = null){newList.push()}
    }

    return (false);
})

//////////////////////////////////////////////////////////////
// VUE Project system [ START ]
new Vue({
    el:'#ProjecterDirectory',

    data: {
        showDeleted: false
    },

    methods: {
        reportChange: function(e) {
            console.log(e);
            if(e.target.type == 'textarea'){autosize(e.target)}
            if(! this.typing){this.save()}
        },

        save: function(obj) {
            //var toSave = Obj;
            //console.log(obj);
            this.$http.post('/api/projects', obj)
        },

        createNewProject: function(user_id){
            var projectCount = this.projects.length;
            //console.log('app.js - createNewProject user ID = ', user_id);
            //console.log('app.js - projectCount = ', projectCount);
            var newProject = {
                "id": (projectCount + 1),
                "title": "Title",
                "description": "Details",
                "class": "info",
                "due_time": "12:00:00",
                "due_date": "2017-01-20",
                "owner_id": 0,
                "conversation_id": 0,
                "delegated_id": 0,
                "facility_id": 1,
                "creator_id": user_id,
                "deleted_at": null
            };
            this.projects.push(newProject);
            this.save(newProject);
            //console.log(this.projects)
        },

        deleteProject: function(projectID) {
            var i = 0;
            for(i in this.projects){
                if (this.projects[i].id == projectID.id){
                    this.projects[i].deleted_at = Date.now();
                    console.log(this.projects);
                    console.log(this.$http.post('/api/projects', this.projects[i]));
                }
            }
        },
        isProjectDeleted: function(info){
            console.log('hi');
            return false;
        },
        createNewTask: function(project_id, conversation_id, user_id){
            //console.log(project_id , conversation_id, user_id);
            //console.log(this.projects[(project_id - 1)].task);
            var newTask = {
                "id": 71,
                "title": "Title",
                "description": "Details",
                "class": "info",
                "due_time": "13:27:29",
                "due_date": "2015-05-27",
                "owner_id": 0,
                "conversation_id": 0,
                "project_id": project_id,
                "facility_id": 1,
                "creator_id": user_id
            };
            this.projects[project_id - 1].task.push(newTask);
        },


        fetchProjects: function(){
            this.$http.get('/api/projects', function(projects){
                this.$set('projects', projects);
            });
        }
    },

    ready: function() {

        this.fetchProjects();
    }


})
// VUE system [ END ]
//////////////////////////////////////////////////////////////

/* VUE Project Task system [ START ]
new Vue({
    el:'#ProjecterDirectory2',
    data: {
        messages: {},
        projects: $(bosspos.projects),
        saved: true,
        typing: false
    },

    methods: {

        reportChange: function(e) {
            if(e.target.type == 'textarea'){autosize(e.target)}
            if(! this.typing){this.save()}
        },

        save: function() {
            this.typing = true;
            var that = this;
            setTimeout(function () {
                that.typing = false;
                console.log('persist to database');
            }, 5000);
        },
        createNewTask: function(project_id, conversation_id, user_id){
            //console.log(project_id , conversation_id, user_id);
            //console.log(this.projects[(project_id - 1)].task);
            var newTask ={
                "id": 71,
                "title": "Title",
                "description": "Details",
                "class": "info",
                "due_time": "13:27:29",
                "due_date": "2015-05-27",
                "owner_id": 0,
                "conversation_id": 0,
                "project_id": project_id,
                "facility_id": 1,
                "creator_id": user_id
            };
            this.projects[project_id - 1].task.push(newTask);
        },
        toggleLock: function(e) {
            this.theLock = ! this.theLock;
        },
        fetchMessages: function(){
            this.$http.get('/api/messages', function(messages){
                this.$set('messages', messages);
            })
        }
    },

    ready: function() {
        this.fetchMessages();
    }


})
// VUE system [ END ]
//////////////////////////////////////////////////////////////*/