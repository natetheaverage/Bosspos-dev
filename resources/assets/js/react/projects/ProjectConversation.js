import Conversation from './Conversation';
import ObjectToArray from './ObjectToArray';

var ProjectConversation = React.createClass({

    getInitialState: function () {
        var project = this.props.project[1];
        var conversations = new ObjectToArray(project.conversations);
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
    broadcast: function (newConversation) {
        socket.emit('project:conversation', newConversation);
    },
    createNewConversation: function (e) {
        e.preventDefault();
        var newConversationBodyText = this.state.newMessageBodyText;
        var newConversationId = $(bosspos.messageCounter)[0] + 1;
        var newConversation = ['message',
            {
                body: newConversationBodyText,
                className: "info",
                conversation_id: this.props.id,
                created_at: 'time',
                deleted_at: null,
                id: newConversationId,
                subject: "The teleporter resists.",
                tagged_id: 1,
                updated_at: 'time',
                user_id: 1
            }];
        //console.log(newConversation);
        newConversationBodyText = '';
        this.setState({newConversationBodyText});
        this.broadcast(newConversation)
    },
    render: function() {

        var tab = `bosspos-projecter-tab-3-${this.state.id}`;

        var newConversationList = function(conversation) {
            conversation = conversation[1];
            //console.log("-> ProjectConversation -> ", conversation.messages);

            var messages = new ObjectToArray(conversation.messages);

            return <Conversation
                id={conversation.id}
                project={this.props.project}
                title={conversation.title}
                description={conversation.description}
                className={conversation.class}
                messages={messages}
                facility_id={conversation.facility_id}
                owner_id={conversation.owner_id}
                owner_type={conversation.owner_type}
                tagged_id={conversation.tagged_id}
                created_at={conversation.created_at}
                updated_at={conversation.updated_at}
                user_id={conversation.user_id}
            />
        }.bind(this);

        return (
            <div id={tab} className="tab-pane fade">

                <div className="list-group ">
                    <div className="row mar-btm">
                        <div className="col-md-12 mar-btm">
                            <button className="btn btn-primary btn-block" onClick={this.createNewConversation} ><span className="fa fa-plus"></span> Create A New Note</button>
                        </div>
                        {this.state.conversations.map(newConversationList)}
                    </div>
                </div>
            </div>
        );
    }

});

export default ProjectConversation;