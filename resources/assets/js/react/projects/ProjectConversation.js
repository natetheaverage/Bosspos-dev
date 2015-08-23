import Conversation from './Conversation';
import ObjectToArray from './ObjectToArray';

var ProjectConversation = React.createClass({

    getInitialState: function () {
        var project = this.props.project[1];
        var conversations = new ObjectToArray(this.props.conversations);
        //console.log("ProjectConversation ----------  ", this.props.conversations);
        return {
            id: this.props.project[0],
            tasks: project.task,
            conversations: this.props.project.conversations,
            conversation: {},
            newConversationBodyText: '',
            newConversationId: $(bosspos.messageCounter)[0]
        };
    },
    broadcast: function (newConversation) {
        console.log('projectConversation -> broadcast', newConversation);
        socket.emit('project:conversation', newConversation);
    },
    createNewConversation: function (e) {
        e.preventDefault();
        var newConversationBodyText = this.state.newConversationBodyText;
        var newConversationId = $(bosspos.conversationCounter)[0] + 1;
        //console.log('projectConversation -> createNewConversation', this.props);
        var newConversation = ['message',
            {
                body: 'Content here...',
                className: "info",
                owner_id: this.props['project'][1]['id'],
                created_at: 'time',
                deleted_at: null,
                id: newConversationId,
                title: "New Note",
                messages: {},
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
            console.log("ProjectConversation -> render this.props.conversations", conversation);

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
                        {this.props.conversations.map(newConversationList)}
                    </div>
                </div>
            </div>
        );
    }

});

export default ProjectConversation;