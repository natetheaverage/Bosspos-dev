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
    broadcast: function (newMessage) {
        socket.emit('project:message', newMessage);
    },
    onChange: function (e) {
        var newMessageBodyText = e.target.value;
        this.setState({newMessageBodyText});
    },
    createNewMessage: function (e) {
        e.preventDefault();
        var newMessageBodyText = this.state.newMessageBodyText;
        var newMessageId = $(bosspos.messageCounter)[0] + 1;
        var newMessage = ['message',
            {
                body: newMessageBodyText,
                className: "info",
                conversation_id: this.props.id,
                created_at: 'time',
                deleted_at: null,
                id: newMessageId,
                subject: "The teleporter resists.",
                tagged_id: 1,
                updated_at: 'time',
                user_id: 1
            }];
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
        var newMessageList = function (message) {
            //console.log('THIS IS IN Conversation >> >> >> ', message[1].body);
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
                    <p className="list-group-item-text">{this.props.description}</p>
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


