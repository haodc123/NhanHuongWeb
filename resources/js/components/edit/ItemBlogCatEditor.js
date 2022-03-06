import React, { useState } from 'react';
import {f_sendAPIPost} from '../../utils/Utils'; 
import ReactDOM from 'react-dom';

function ItemBlogCatEditor(props) {

    const [name, setName] = useState(props.cat.blogs_cat_name);
    const [order, setOrder] = useState(props.cat.blogs_cat_order);
    const [status, setStatus] = useState(props.cat.blogs_cat_status);
    const [resStatus, setResStatus] = useState(0);

    var id = props.cat.id;

    // Handle Delete
    const handleClickUpdate = (type, e) => {
        e.preventDefault();
        if (type == 'delete') {
            if(window.confirm('Are you sure to this action?'))
            sendDelete();
        } else {
            sendUpdate();
        }
        
    }
    const sendDelete = () => {
        const requestData = {
            id: id
        };
        f_sendAPIPost('/edit/del_blogcat', handleAPIReceivedDelete, requestData);
    }
    const handleAPIReceivedDelete = res => {
        setResStatus(res.status);
        if (res.status) {
            props.handlePopup('Announcement', 'You deleted this item successfully!');
            props.needUpdate(prev => prev+1);
        }
    }
    
    // Handle Update
    const sendUpdate = () => {
        const requestData = {
            id: id,
            name: name,
            order: order,
            status: status
        };
        f_sendAPIPost('/edit/update_blogcat', handleAPIReceivedUpdate, requestData);
    }
    const handleAPIReceivedUpdate = res => {
        setResStatus(res.status);
        if (res.status) {
            props.handlePopup('Announcement', 'You update this item successfully!');
            props.afterUpdate(prev => prev+1);
        }
    }

    return (
        <tr>
            <td>{id}</td>
            <td>        
                <input type="text" name="bc_name"
                    value={name} onChange={e=>setName(e.target.value)} />
            </td>
            <td>
                <input type="text" name="bc_order"
                    value={order} onChange={e=>setOrder(e.target.value)} />
            </td>
            <td>
                <select name="bc_status" onChange={e=>setStatus(e.target.value)}>
                    <option selected={status == 0} value="0" >No active</option>
                    <option selected={status == 1} value="1" >Active</option>
                </select>
            </td>
            <td>
                <form>
                    <button
                        name="bc_action"
                        value="update"
                        onClick={() => handleClickUpdate('update', event)}
                        className="btn btn-primary">Update</button>
                    <button 
                        name="bc_action"
                        value="delete" 
                        onClick={() => handleClickUpdate('delete', event)}
                        className="btn btn-danger">Delete</button>
                    {resStatus}
                </form>
            </td>
        </tr>
    );
}

export default ItemBlogCatEditor;
