import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class HeaderProfileContent extends Component {

    constructor (props) {
        super(props);
        this.state = {
            user: {},
            followActive: false,
        };
        this.handleClick = this.handleClick.bind(this);
    }

    componentDidMount () {
        const component = document.getElementById("HeaderProfileContent");
        // insert user state data required by data-user in html.
        this.setState({
            user: JSON.parse(component.dataset.user)
        });
    }

    handleClick (e) {
        e.preventDefault();
        this.setState({
            followActive: !this.state.followActive
        });
    }

    render () {
        return (
            <div className="header-profile-content">
                <div className="left-content">
                    <div className="profile-image">
                        <img src={ "/assets/img/" + this.state.user.profile_image } />
                    </div>
                </div>
                <div className="right-content">
                    <h3>{ this.state.user.name }</h3>
                    <button className={ this.state.followActive ? "follow-btn active-follow" : "follow-btn" } onClick={ this.handleClick }>
                        { this.state.followActive ? "Subscriber" : "Follow" }
                    </button>
                    <p>{ this.state.user.description }</p>
                </div>
            </div>
        )
    }

}

if (document.getElementById('HeaderProfileContent')) {
    ReactDOM.render(<HeaderProfileContent />, document.getElementById('HeaderProfileContent'));
}