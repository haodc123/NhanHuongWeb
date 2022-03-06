// const someCommonValues = ['common', 'values'];
import axios from "axios";

export const f_sendAPIGet = (url, setRefRes = null) => {
    
    var res = null;
    var loading = null;

    console.log('Send API Get from common function...');
    // use fetch
    fetch(url)
        .then(response => response.json())
        .then(response => {
            loading = false;
            res = response;
            setRefRes(response);
        });
    
    return { loading, res }
    
};

export const f_sendAPIPost = (url, setRefRes = null, reqData = null) => {

    console.log('Send API Post from common function...');
    // use axios
    axios.post(url, reqData)
        .then(
            // response: {data: {<response from controller>}, status: 200}
            response => {
                // alert(JSON.stringify(response.data));
                setRefRes(response.data);
            }    
        )
        .catch(error => {
            console.log("ERROR:: ", error.response);
        });
}