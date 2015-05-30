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

    for(var part in newParts){

        var newPart = newParts[part][0];

        switch(newPart) {
            case 'message':
                var message = newPart;

                var messageLabel = `message_${messages[r].id}`;
                var messageToAdd = messages[r];
                messageCollection[messageLabel] = messageToAdd;
                break;
            case 'conversation':
                conversationCollection.push({conversation: newPart});
                break;
            case 'task':
                taskCollection.push({task: newPart});
                break;
            case 'project':
                projectCollection.push({project: newPart});
                break;
            default:alert('no match');
        }
    }

    // iterate through collection and label each object for ease in search
    for (var i = 0; i < projects.length; i++) {
        var projectLabel = projects[i].id;
        var projectToAdd =  projects[i];
        projectCollection[projectLabel] = projectToAdd;

        // set task array for sorting
        var tasks = projects[i].task;
        //for task loop
        for (var j = 0; j < tasks.length; j++) {
            var taskLabel = tasks[j].id;
            var taskToAdd = tasks[j];
            taskCollection[taskLabel] = taskToAdd;
        }// end for task

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
            }// end for messages

            // Each loop insert the newly labeled object Save and clear the collector
            conversationCollection[conversationLabel]['messages'] = messageCollection;
            conversationCollection = save(conversationCollection);
            messageCollection = {};

        }// end for Conversation

        // Each loop insert the newly labeled object Save and clear the collector
        projectCollection[projectLabel]['tasks'] = taskCollection;
        projectCollection[projectLabel]['conversations'] = conversationCollection;
        projectCollection = save(projectCollection);
        taskCollection = {};
        conversationCollection = {};

    }// end for project


function save(jsonObj){
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
var ObjectToArray = function(obj = {you:'fuck',now:'off'}) {

    var toReturn = [];
    for (var i in obj) {
        toReturn.push([i, obj[i]]);
        console.log('THIS IS OTA in command find the keys>> >> >> ', obj);
    }
    return toReturn;
};



export default ProjectCommand;

