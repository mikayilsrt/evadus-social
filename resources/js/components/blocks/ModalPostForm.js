import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import * as Icons from 'react-feather';

export default class ModalPostForm extends Component {

    constructor (props) {
        super(props);
        this.state = {
            strContent: "",
            countChar: 0,
            addCollection: false
        };
        this.handleChange = this.handleChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
        this.addCollectionInput = this.addCollectionInput.bind(this);
    }

    handleChange (e) {
        e.preventDefault();
        this.setState({
            strContent: e.target.value,
            countChar: e.target.value.length
        });
    }

    addCollectionInput (e) {
        e.preventDefault();
        this.setState({
            addCollection: !this.state.addCollection
        });
    }

    handleSubmit (e) {
        e.preventDefault();
        console.log("New post...");
    }

    render () {
        return (
            <div className="modal fade" tabIndex="-1" role="dialog" id="exampleModal">
                <div className="modal-dialog" role="document">
                    <form className="modal-content" onSubmit={ this.handleSubmit } encType={"multipart/form-data"}>
                        <div className="modal-header">
                            <button type="button" className="close close-btn" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" className="icon">&times;</span>
                            </button>
                            <h5 className="modal-title">Quoi de neuf ?</h5>
                        </div>

                        <div className="modal-body">
                            <div className="alert alert-danger" role="alert">
                                A simple error alert—check it out!
                            </div>
                            <div className={ this.state.addCollection ? "form-group form-group-none" : "form-group" }>
                                <select className="form-control" name="">
                                    <option>liste 1</option>
                                    <option>liste 2</option>
                                    <option>liste 3</option>
                                    <option>liste 4</option>
                                    <option>liste 5</option>
                                </select>
                            </div>
                            <div className={ this.state.addCollection ? "form-group" : "form-group form-group-none"}>
                                <input
                                    type="text"
                                    name=""
                                    className="form-control"
                                        placeholder="Nom de la liste..." />
                            </div>
                            <div className="form-group">
                                <textarea
                                    className="form-control area-input"
                                    name=""
                                    placeholder="Quoi de neuf ?"
                                    onChange={ this.handleChange }>
                                </textarea>
                            </div>
                            <div className="form-group">
                                <label htmlFor="fileInput" className="form-icon"><Icons.FilePlus className={"icon"} /></label>
                                <input type="file" name="" className="form-control fileInput" id="fileInput" />
                            </div>
                            <div className="form-group">
                                <label className="form-icon" onClick={ this.addCollectionInput }><Icons.List className={"icon"} /></label>
                            </div>
                            <p className="js-str-counter">{ this.state.countChar } / 160</p>
                        </div>
                        <div className="modal-footer">
                            <button type="button" className="btn btn-default btn-theme" data-dismiss="modal">Close</button>
                            <button type="submit" className="btn btn-upload btn-theme">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        )
    }

}

if (document.getElementById('modalNewPost')) {
    ReactDOM.render(<ModalPostForm/>, document.getElementById('modalNewPost'));
}