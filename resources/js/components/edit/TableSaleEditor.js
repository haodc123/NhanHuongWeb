import React from 'react';
import ReactDOM from 'react-dom';

function TableSaleEditor() {
    return (
        <div className="row">
            <div className="blog-box clearfix">
                <table className="table table-hover list-ctrl">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Tel</th>
                            <th scope="col">Address</th>
                            <th scope="col">Note</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <form method="POST" action="/control/update_order">
                                <td>
                                    <label></label>
                                    <input type="hidden" name="f_name"
                                        value="">
                                    </input>
                                </td>
                                <td>
                                    <label></label>
                                    <input type="hidden" name="f_tel"
                                        value="">
                                    </input>
                                </td>
                                <td>
                                    <input type="text" name="f_addr"
                                        value="">
                                    </input>
                                </td>
                                <td>
                                    <input type="text" name="f_food"
                                        value="">
                                    </input>
                                </td>
                                <td>
                                    <select name="f_status">
                                        <option value="0" >Not confirm</option>
                                        <option value="1" >Confirmed</option>
                                        <option value="2" >Ready delivery</option>
                                        <option value="3" >Deliveried</option>
                                        <option value="4" >Finish</option>
                                    </select>
                                </td>
                                <input type="hidden" name="f_id" value="{{ $order->id }}"/>
                                <input type="hidden" name="f_customer_id" value="{{ $order->customer_id }}"/>
                                <td>
                                    <button type="submit"
                                        name="order_action"
                                        value="update"
                                        className="btn btn-primary">Update</button>
                                    <button type="submit" 
                                        name="order_action"
                                        value="delete" 
                                        onClick="return confirm('Bạn chắc không?')"
                                        className="btn btn-danger">Delete</button>
                                </td>
                            </form>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    );
}

export default TableSaleEditor;
