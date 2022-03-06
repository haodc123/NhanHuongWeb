import React from 'react';
import { BrowserRouter, Switch, Route } from 'react-router-dom';
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
                                            <TableBlogEditor handlePopup={props.handlePopup} /> :
                                            <TableSaleEditor handlePopup={props.handlePopup} />;

    return (
        <div>

            {/* <BrowserRouter>
                <Switch>
                    <Route exact path="/edit/">
                        <FilterBlogs />
                        <TableBlogEditor handlePopup={props.handlePopup} />
                        <PagingEditor />
                    </Route>
                    <Route exact path="/edit/blogs">
                        <FilterBlogs />
                        <TableBlogEditor handlePopup={props.handlePopup} />
                        <PagingEditor />
                    </Route>
                    <Route exact path="/edit/blogcats">
                        <TableBlogCatEditor handlePopup={props.handlePopup} />
                        <PagingEditor />
                    </Route>
                    <Route exact path="/edit/sales">
                        <TableSaleEditor handlePopup={props.handlePopup} />
                        <PagingEditor />
                    </Route>
                    <Route exact path="/edit/blog/form">
                        <FormBlogEditor />
                    </Route>
                </Switch>
            </BrowserRouter> */}

            {filter}

            {tableEditor}

        </div>
    );
}

export default ContentEditor;
