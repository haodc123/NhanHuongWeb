import React from 'react';
import ReactDOM from 'react-dom';
import TitleEditor from './TitleEditor';
import FilterBlogs from './FilterBlogs';
import TableBlogCatEditor from './TableBlogCatEditor';
import TableBlogEditor from './TableBlogEditor';
import TableSaleEditor from './TableSaleEditor';
import PagingEditor from './PagingEditor';

function ContentEditor(props) {

    var filter = props.type == 'blogs' ? <FilterBlogs /> : '';
    var tableEditor = props.type == 'blogcats' ? 
                                        <TableBlogCatEditor handlePopup={props.handlePopup} /> : 
                                        props.type == 'blogs' ?
                                            <TableBlogEditor /> :
                                            <TableSaleEditor />;

    return (
        <div>
            <TitleEditor type={props.type}/>

            {filter}

            {tableEditor}

            <PagingEditor />

        </div>
    );
}

export default ContentEditor;
