import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import * as Icons from 'react-feather';

export default class ModalPostForm extends Component {

    constructor (props) {
        super(props);
        this.state = {
        }
    }

    render () {
        return (
            <div className="modal fade" tabIndex="-1" role="dialog" id="exampleModal">
                <div className="modal-dialog" role="document">
                    <div className="modal-content">
                        <div className="modal-header">
                            <h5 className="modal-title">Modal title</h5>
                            <button type="button" className="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div className="modal-body">
                            <div className="alert alert-danger" role="alert">
                                A simple error alert—check it out!
                            </div>
                            <form encType={"multipart/form-data"}>
                                <div className="form-group">
                                    <select className="form-control">
                                        <option>Collection 1</option>
                                        <option>Collection 2</option>
                                        <option>Collection 3</option>
                                        <option>Collection 4</option>
                                        <option>Collection 5</option>
                                    </select>
                                </div>
                                <div className="form-group">
                                    <textarea className="form-control area-input" placeholder="Quoi de neuf ?"></textarea>
                                </div>
                                <div className="form-group">
                                    <label htmlFor="fileInput" className="form-icon"><Icons.FilePlus className={"icon"} /></label>
                                    <input type="file" className="form-control fileInput" id="fileInput" />
                                </div>
                            </form>
                        </div>
                        <div className="modal-footer">
                            <button type="button" className="btn btn-default btn-theme" data-dismiss="modal">Close</button>
                            <button type="button" className="btn btn-upload btn-theme">Upload</button>
                        </div>
                    </div>
                </div>
            </div>
        )
    }

}

if (document.getElementById('modalNewPost')) {
    ReactDOM.render(<ModalPostForm/>, document.getElementById('modalNewPost'));
}