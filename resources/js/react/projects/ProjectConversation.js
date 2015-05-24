import Conversation from './Conversation';

var ProjectConversation = React.createClass({

    getInitialState: function () {

        return {
            conversations: this.props.conversations
        };
    },
    render: function () {

        var tab = `bosspos-projecter-tab-3-${this.props.id}`;

        var newConversationList = function(conversation) {

            return <Conversation
                id={conversation.id}
                title={conversation.title}
                description={conversation.description}
                className={conversation.class}
                messages={conversation.message}
                facility_id={conversation.facility_id}
                owner_id={conversation.owner_id}
                owner_type={conversation.owner_type}
                tagged_id={conversation.tagged_id}
                created_at={conversation.created_at}
                updated_at={conversation.updated_at}
                user_id={conversation.user_id}
            />
        };

        return (
            <div id={tab} className="tab-pane fade">

                <div className="list-group bg-dark">
                    <div className="row mar-btm">
                        <div className="col-sm-12 mar-btm">
                            <button className="btn btn-primary btn-block"><span className="fa fa-plus"></span> New Note</button>
                        </div>
                        {this.state.conversations.map(newConversationList)}
                    </div>
                </div>
            </div>
        );
    }

});

export default ProjectConversation;