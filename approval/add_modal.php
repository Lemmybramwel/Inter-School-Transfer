<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Reg. No. :</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="regno" required>
					</div>
				</div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Name :</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" required>
                    </div>
                </div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Date of Birth:</label>
					</div>
					<div class="col-sm-10">
						<input type="date" class="form-control" name="dob" required>
					</div>
				</div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">ID Number:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="int" class="form-control" name="idno" required>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-2 control-label">Gender : </label>
                    <div class="col-sm-10">
                        <select name="gender" class="form-control" required="required">
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Nationality:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nation" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">County :</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="county" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Home Address :</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="address" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Sponsor :</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="sponsor" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Program :</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="prog" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Username :</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="usernm" required>
                    </div>
                </div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Email Address:</label>
					</div>
					<div class="col-sm-10">
						<input type="email" class="form-control" name="email" required>
					</div>
				</div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Password :</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="pass" required>
                    </div>
                </div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
			</form>
            </div>

        </div>
    </div>
</div>