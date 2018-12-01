import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import * as Icons from "react-feather";

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

    handleClick () {
        this.setState({
            isLiked: !this.state.isLiked,
            likes: this.state.likes + (this.state.isLiked ? -1 : 1)
        });
    }

    render () {
        return (
            <button className={ this.state.isLiked ? "toggle-active" : "" } onClick={ () => this.handleClick() }>
                <Icons.Heart className="icon" /> Likes
            </button>
        );
    }

}

document.querySelectorAll("li.react-like").forEach(function (li) {
    ReactDOM.render(React.createElement(PostLikeButtonBlocks), li);
});