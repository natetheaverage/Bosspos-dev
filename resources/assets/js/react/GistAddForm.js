var GistAddForm = React.createClass({

    getInitialState: function(){
        return{
          username: ''
        };
    },

    onChange: function(e){
        this.setState({ username: e.target.value })
    },

    addGist : function(e){

        this.props.onAdd(this.state.username);

        this.setState({ username: '' });

        e.preventDefault();
    },
    render: function () {
        return (
            <div>
                <form onSubmit={this.addGist}>
                    <input value={this.state.username} onChange={this.onChange} placeholder="github username"/>
                    <button>find</button>
                </form>
            </div>
        );
    }

});
export default GistAddForm;