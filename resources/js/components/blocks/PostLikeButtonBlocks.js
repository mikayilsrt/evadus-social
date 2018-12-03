import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import * as Icons from "react-feather";
import axios from "axios";

export default class PostLikeButtonBlocks extends Component {

    constructor (props) {
        super(props);
        this.state = {
            likes: props.likes || 0,
            isLiked: props.isLiked || false
        };
    }

    componentDidMount () {
    }

    handleChange () {
        this.setState({
            isLiked: !this.state.isLiked,
            likes: this.state.likes + (this.state.isLiked ? -1 : 1) // true => -1 or +1
        });
    }

    handleClick (e) {
        e.preventDefault();
        this.handleChange(); // Method to change the state values.
        let isLiked = !this.state.isLiked; // Reserve the like boolean in true or false.

        // Http request post with axios.
        axios.post("/like", {
            like: isLiked, // true => +1 false -1
            user_id: 1, // id of user
            post_id: 3 // id of post
        }).then((response) => {
            if (response.request.readyState === 4 && response.request.status === 200) {
                console.log(response);
            }
        }).catch((error) => {
            console.log(error);
        });
    }

    render () {
        return (
            <button className={ this.state.isLiked ? "toggle-active" : "" } onClick={ (e) => this.handleClick(e) }>
                <Icons.Heart className="icon" /> Likes
            </button>
        );
    }

}

document.querySelectorAll("li.react-like").forEach(function (li) {
    ReactDOM.render(React.createElement(PostLikeButtonBlocks), li);
});