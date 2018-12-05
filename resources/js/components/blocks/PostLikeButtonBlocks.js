import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import * as Icons from "react-feather";
import axios from "axios";

export default class PostLikeButtonBlocks extends Component {

    constructor (props) {
        super(props);
        this.state = {
            likeData: props.likeData || [], // contient tous les likes d'un post.
            likes: props.likes || 0,
            post_id: props.post_id || null,
            user_id: props.user_id || null, // Auth id.
            isLiked: props.isLiked || false
        };
    }

    componentDidMount () {
        this.state.likeData.map((like) => {
            if (like.user_id == this.state.user_id) {
                this.setState({
                    isLiked: true
                });
            }
        });
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
            _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            like: isLiked, // true => +1 false -1
            post_id: this.state.post_id // id of post
        }).then((response) => {
            if (response.request.readyState === 4 && response.request.status === 200) {
                // ............... //
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
    ReactDOM.render(
        React.createElement(
            PostLikeButtonBlocks,
            {
                user_id: li.dataset.authid,
                post_id: li.dataset.id,
                likeData: JSON.parse(li.dataset.postlikes)
            }
        ),
    li);
});