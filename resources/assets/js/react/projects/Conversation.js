import Message from './Message';

var Conversation = React.createClass({

    getInitialState: function () {

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
    broadcast: function (msg) {
        socket.emit(msg.channel, msg.content, msg.content.user_id);
    },
    onChange: function (e) {
        var conversationBodyText = e.target.value;
        this.setState({ conversationBodyText });
        this.updateConversationBody(conversationBodyText);
    },
    updateConversationBody : function(conversationBodyText){
        //var messageBodyText = this.state.messageBodyText;
        var Message = {
            channel: 'project:conversation:change',
            content: {
                body: conversationBodyText,
                className: "info",
                conversation_id: this.state.conversation_id,
                created_at: 'time',
                deleted_at: null,
                id: this.props.id,
                subject: "The teleporter resists.",
                tagged_id: 1,
                updated_at: 'time',
                user_id: 1
            }
        };
        //console.log('Message.js@updateMessage generated : ', this.props.conversation_id);
        //messageBodyText = '';
        //this.setState({ messageBodyText });

        this.broadcast(Message)

    },
    createNewMessage: function (e) {
        e.preventDefault();
        var newMessageBodyText = this.state.newMessageBodyText;
        var newMessageId = $(bosspos.messageCounter)[0] + 1;
        var newMessage = {
            channel: 'project:message',
            content: {
                description: newMessageBodyText,
                className: "info",
                conversation_id: this.props.id,
                created_at: 'time',
                deleted_at: null,
                id: newMessageId,
                subject: "The teleporter resists.",
                tagged_id: 1,
                updated_at: 'time',
                user_id: 1
            }
        };
        console.log('Conversation.js@newMessage generated : ', newMessage);
        newMessageBodyText = '';
        this.setState({newMessageBodyText});
        this.broadcast(newMessage)
    },
    addMessage: function (e, message) {
        e.preventDefault();
        var messages = this.state.messages.concat(message);
        message = {};
        this.setState({messages, message});
    },
    render: function () {

        //console.log('Conversation.js -> render ', this.props.project);

        var newMessageList = function (message) {
            return <Message
                id={message[1].id}
                conversation_id={this.props.id}
                project={this.props.project}
                messageBodyText={message[1].body}
            />
        }.bind(this);
        return (
            <div className="col-md-12 mar-btm">
                <a className="list-group-item mar-no">
                    <div className="bord-btm mar-btm">
                        <div className="btn-group pull-right">
                            <button className="btn btn-sm btn-mint "><span className="fa fa-edit"></span></button>
                            <button className="btn btn-sm btn-danger"><span className="fa fa-close"></span></button>
                        </div>
                        <span className="list-group-item-heading text-2x">{this.props.title}</span>

                    </div>
                    <form className='' onChange={this.onChange} onSubmit={this.savesaveConversatio} >
                        <div className='input-group display-flex b'>
                            <textarea className="form-control form-textarea project-message-body" value={this.props.description} onChange={this.useTextAreaResize} />
                        </div>
                    </form>

                    <p className="list-group-item-text">{this.props.updated_at}</p>
                </a>
                <div className="timeline">
                    {this.props.messages.map(newMessageList)}
                    <div className="timeline-header">
                        <button className="btn btn-primary " onClick={this.createNewMessage} ><span className="fa fa-plus"></span> Comment</button>
                    </div>

                </div>

            </div>

        );
    }

});

export default Conversation;


