
function myObj(){
    let obj = document.getElementById("objectives").value;

    if (obj == 'First Half'){
        let showObj;

        showObj = `
                <div class="col-md-12 col-lg-12 col-sm-12 mt-3">
                    <label class="custom-label">Target *</label>
                    <textarea name="target" required class="form-control custom-input" value="Mention various targets you
                    had set"></textarea>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 mt-3">
                    <label class="custom-label">Weight *</label>
                    <p>Total - 100% (Add weightage to each objective) </p>
                    <input type="text" name="weight" required class="form-control custom-input">
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 mt-3">
                    <label class="custom-label">Achieved *</label>
                    <p>Give a percentage (%) of progress</p>
                    <input type="text" name="achieved" required class="form-control custom-input">
                </div>
        `

    document.getElementById("display").innerHTML = showObj;
    }
    else {
        let showObj2;

        showObj2 = `
                <div class="col-md-12 col-lg-12 col-sm-12 mt-3">
                    <label class="custom-label">Target *</label>
                    <textarea name="target" required class="form-control custom-input" value="Mention various targets you
                    had set"></textarea>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 mt-3">
                    <label class="custom-label">Weight *</label>
                    <p>Total - 100% (Add weightage to each objective) </p>
                    <input type="text" name="weight" required class="form-control custom-input">
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 mt-3">
                    <label class="custom-label">Achieved *</label>
                    <p>Give a percentage (%) of progress</p>
                    <input type="text" name="achieved" required class="form-control custom-input">
                </div>
        `

    document.getElementById("display").innerHTML = showObj2;
    }

}





                     