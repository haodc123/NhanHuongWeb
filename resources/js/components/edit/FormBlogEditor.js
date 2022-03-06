import React, { useState, useEffect } from 'react';
import { useLocation } from "react-router-dom";

function FormBlogEditor(props) {
    const location = useLocation();
    const id = location.state.id

    return (
        <div className="row">
            <div className="blog-box clearfix">
                Form {id}
            </div>
        </div>
    );
}

export default FormBlogEditor;
