import React, { Component } from "react";
import ReactDOM from "react-dom";
import mediumZoom from "medium-zoom";

export default class MediaFeedBlocks extends Component {

    constructor (props) {
        super(props);
        this.state = {
            id: "",
            image: ""
        };
        this.zoomMedia = this.zoomMedia.bind(this);
    }

    componentDidMount () {
        const element = document.getElementById("media-image");
        const elementID = element.dataset.id;
        const elementImage = element.dataset.img;
        this.setState({
            id: elementID,
            image: elementImage
        });
    }

    zoomMedia (e) {
        e.preventDefault();
        const zoomMediaImage = mediumZoom(document.getElementById(e.target.id));
        zoomMediaImage.open();
        zoomMediaImage.on('closed', () => zoomMediaImage.detach())
    }

    render () {
        return (
            <img id={ "media-image-" + this.state.id } onClick={ this.zoomMedia } className="medium-zoom-image" src={ this.state.image } alt=""/>
        );
    }

}

if (document.getElementById("media-image")) {
    ReactDOM.render(<MediaFeedBlocks/>, document.getElementById("media-image"));
}