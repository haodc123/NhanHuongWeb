import React, { useState, useEffect } from 'react';
// import use_API from '../../utils/use_API'; 
import {f_sendAPIGet} from '../../utils/Utils'; 
import ItemBlogCatEditor from './ItemBlogCatEditor';

function TableBlogCatEditor(props) {

    const [cats, setCats] = useState([]);
    const [needUpdate, setNeedUpdate] = useState(0);

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
    }, [needUpdate]);

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
                            <ItemBlogCatEditor key={cat.id} cat={cat} needUpdate={setNeedUpdate} handlePopup={props.handlePopup} />
                        ))}
                    </tbody>
                </table>
            </div>
        </div>
    );
}

export default TableBlogCatEditor;
