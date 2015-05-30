import Gist from './Gist';
import GistAddForm from './GistAddForm';

var GistBox = React.createClass({

    getInitialState: function() {

        return {
            gists: [{ username: 'jefferyway', url: 'http://google.com' }]
        };
    },

    addGist: function(username){

        var url = `https://api.github.com/users/${username}/gists`;

        $.get(url, function(results){
            //console.log(results);
            var username = results[0].owner.login;
            var url = results[0].html_url;
            var gists = this.state.gists.concat({ username, url });

            this.setState({ gists });
        }.bind(this));


    },

    render: function () {

        var newGist = function(gist) {
            return <Gist username={gist.username} url={gist.url} />
        };

        return (
            <div>
                <h1>Gist Box</h1>
                <GistAddForm onAdd={this.addGist} />
                { this.state.gists.map(newGist) }
            </div>
        );
    }

});

export default GistBox;

