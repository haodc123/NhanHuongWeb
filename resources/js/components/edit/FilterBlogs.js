import React from 'react';
import ReactDOM from 'react-dom';

function FilterBlogs() {
    return (
        <div className="f_ctrl_filter row">
            <form>
                <td>
                    <input className="fe_ctrl" type="text" name="ff_name"
                    placeholder="filter name" onfocusout="onOrdersFilter()">
                    </input>
                </td>
                <td>
                    <input className="fe_ctrl" type="text" name="ff_tel"
                    placeholder="filter tel" onfocusout="onOrdersFilter()">
                    </input>
                </td>
                <td>
                    <input className="fe_ctrl" type="text" name="ff_addr"
                    placeholder="filter addr" onfocusout="onOrdersFilter()">
                    </input>
                </td>
                <td>
                    <input className="fe_ctrl" type="text" name="ff_food"
                    placeholder="filter note" onfocusout="onOrdersFilter()">
                    </input>
                </td>
                <td>
                    <select className="fe_ctrl" name="ff_status">
                        <option value="0" >Not confirm</option>
                        <option value="1" >Confirmed</option>
                        <option value="2" >Ready delivery</option>
                        <option value="3" >Deliveried</option>
                        <option value="4" >Finish</option>
                    </select>
                </td>
            </form>
        </div>
    );
}

export default FilterBlogs;
