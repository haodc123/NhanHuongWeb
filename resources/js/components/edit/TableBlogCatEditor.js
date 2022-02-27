import React, { useState, useEffect } from 'react';
// import use_API from '../../utils/use_API'; 
import {f_sendAPIGet} from '../../utils/Utils'; 
import ReactDOM from 'react-dom';
import ItemBlogCatEditor from './ItemBlogCatEditor';

function TableBlogCatEditor(props) {

    const [cats, setCats] = useState([]);
    const [afterUpdate, setAfterUpdate] = useState(0);

    // useEffect(() => {
    //     fetch('/edit/get_blogcats')
    //         .then(res => res.json())
    //         .then(data => {
    //             setCats(data.cats)
    //         });
    // }, []);

    // Use Custom hook '../../utils/use_API'
    // use_API('/edit/get_blogcats', (res) => {
    //     setCats(res.data);
    // });

    useEffect(() => {
        // use common function
        f_sendAPIGet('/edit/get_blogcats', (res) => {
            setCats(res.data);
        });
    }, [afterUpdate]);

    return (
        <div className="row">
            <div className="blog-box clearfix">
                <table className="table table-hover list-ctrl">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Order</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {cats.map(cat => (
                            <ItemBlogCatEditor cat={cat} afterUpdate={setAfterUpdate} handlePopup={props.handlePopup} />
                        ))}
                    </tbody>
                </table>
                {afterUpdate}
            </div>
        </div>
    );
}

export default TableBlogCatEditor;
