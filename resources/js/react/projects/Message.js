//require('babel/polyfill');
//var TextareaAutosize = require('react-textarea-autosize');


var Message = React.createClass({
    mixins: [React.addons.LinkedStateMixin],
    getInitialState: function () {
        //console.log('Message.js@getInitialState generated --: ', this.props.messageBodyText);


        return {
            id: this.props.id,
            messageBodyText: this.props.messageBodyText,
            conversation_id: this.props.conversation_id
        };
    },
    broadcast: function(newMessage){
        socket.emit('project:message:change', 1, newMessage);
    },
    useTextAreaResize: function(e)
    {
            autosize(e.target);
            //console.log(" textarea  projector " , e.target);
    },
    onChange: function(e){
        var messageBodyText = e.target.value;
        this.setState({ messageBodyText });
        this.updateMessage(messageBodyText);
    },
   updateMessage : function(messageBodyText){
        //var messageBodyText = this.state.messageBodyText;
        var Message = ['message',
            {
                body: messageBodyText,
                className: "info",
                conversation_id: this.state.conversation_id,
                created_at: 'time',
                deleted_at: null,
                id: this.props.id,
                subject: "The teleporter resists.",
                tagged_id: 1,
                updated_at: 'time',
                user_id: 1
            }];
        //console.log('Message.js@updateMessage generated : ', this.props.conversation_id);
        //messageBodyText = '';
        //this.setState({ messageBodyText });

        this.broadcast(Message)

    },
    render: function () {
        //console.log('Conversation.js@render generated -=-: ', this.props.messageBodyText);


        return (
            <div className="timeline-entry">
                <div className="timeline-stat">
                    <div className="timeline-icon"><img src="img/av4.png" alt="Image" /></div>
                    <div className="timeline-time">3 Hours ago</div>
                    </div>
                    <div className="timeline-label">
                        <div className="btn-group pull-right">
                            <button className="btn btn-sm btn-mint"><span className="fa fa-edit"></span></button>
                            <button className="btn btn-sm btn-danger"><span className="fa fa-close"></span></button>
                        </div>
                        <span className="mar-no pad-btm"><a href="#" className="btn-link primary text-semibold">Lisa D.</a> added this note to <a href="#">This Project this conversation</a></span>
                        <form className='' onChange={this.onChange} onSubmit={this.saveMessage} >
                            <div className='input-group display-flex b'>
                                <textarea className="form-control form-textarea project-message-body" value={this.props.messageBodyText} onChange={this.useTextAreaResize} />
                            </div>
                        </form>
                     </div>
                </div>
        );
    }
});
export default Message;
