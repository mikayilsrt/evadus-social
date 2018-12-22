import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

export default class UsersSuggested extends Component {

    constructor (props) {
        super(props);
        this.state = {
            items: props.items || [],
            addClass: false,
        };
        this.handleClick = this.handleClick.bind(this);
    }

    componentDidMount () {
        axios.get("/random-user").then((response) => {
            console.log(response);
            if (response.request.readyState === 4 && response.status === 200) {
                this.setState({
                    items: response.data
                });
            }
        }).catch((error) => {
            console.log("Error : " + error);
        });
    }

    handleClick (e) {
        e.preventDefault();
        this.setState({
            addClass: !this.state.addClass
        });
    }

    getItem () {
        return this.state.items.map((item) => {
            return (
                <div className="user-item" key={ item.id }>
                    <div className="user-profile">
                        <a href={ document.location.origin + "/profile/" + item.user_name }>
                            <img src="/assets/img/default-profile-img.png" alt=""/>
                        </a>
                    </div>
                    <div className="user-info">
                        <h3>
                            <a href={ document.location.origin + "/profile/" + item.user_name }>{ item.name }</a><span>{ "@" + item.user_name }</span>
                        </h3>
                        <button className={ this.state.addClass ? "follow-btn active-follow" : "follow-btn" } onClick={ this.handleClick }>
                            { this.state.addClass ? "Subscriber" : "Follow" }
                        </button>
                    </div>
                </div>
            );
        });
    }

    render () {
        return (
            this.getItem()
        );
    }

}

if (document.getElementById('userSuggested')) {
    ReactDOM.render(<UsersSuggested />, document.getElementById('userSuggested'));
}