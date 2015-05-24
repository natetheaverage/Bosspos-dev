import Message from './Message';

var Conversation = React.createClass({

    getInitialState: function () {


        return {
            messages: this.props.messages,
            message: {},
            bodyText: ''

        };
    },
    onChange: function(e){

        var bodyText = e.target.value;

        this.setState({ bodyText });
    },
    broadcast: function(){

        //socket.emit('project:message', {bodyText:(this.state.bodyText)});

    },
    createNewMessage: function(e){

        e.preventDefault();

        var message = {
            id:41,
            subject:'New Message',
            body: (this.state.bodyText),
            conversation_id: this.props.id,
            user: 1,
            className: 'info'
        };

        console.log(message);

        this.broadcast()

    },
    addMessage: function(message) {

        var messages = this.state.messages.concat(message);

        message = {};

        this.setState({ messages, message });

    },
    render: function () {



        var newMessageList = function(message) {

            return <Message
                id={message.id}
                subject={message.subject}
                body={message.body}
                user={message.user_id}
                className={message.class}
            />
        };

        return (

                <div className="col-sm-12 mar-btm">
                    <a className="col-sm-12 list-group-item mar-no">
                        <div className="bord-btm mar-btm">

                            <h4 className="list-group-item-heading text-thin">{this.props.title}</h4>

                        </div>

                        <p className="list-group-item-text">{this.props.description}</p>
                        <p className="list-group-item-text">{this.props.updated_at}</p>

                        <div className="bg-gray-light bord-top mar-top">
                            <div className="btn-group pull-right">
                                <button className="btn btn-mint"><span className="fa fa-edit"></span> Edit</button>
                                <button className="btn btn-danger"><span className="fa fa-close"></span> Delete</button>
                            </div>
                        </div>
                    </a>
                    {this.state.messages.map(newMessageList)}
                    <form className='form-horizontal bg-trans bord-btm board-top' onSubmit={this.createNewMessage}>
                        <div className='input-group mar-btm'>
                            <span className='input-group-btn'>
                                <button className="btn btn-primary pull-right" type="submit" ><span className="fa fa-plus"></span> Comment</button>
                            </span>
                            <input className='form-control' onChange={this.onChange} value={this.state.bodyText}/>
                            <input name="conversation_id" type="hidden" value={{conversation_id: this.props.id}}/>
                        </div>
                    </form>

                </div>

        );
    }

});

export default Conversation;