<div class="container newProject">
			<h2> Add New Project</h2>
			<form action="" method="post" id="target_new_project_list">
			<div class="row">
    			<div class="col-sm-6">
					<div class="form-group">
						<label for="email">Project Name :</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Enter Project Name">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="email">Project Sub-Title</label>
						<input type="text" class="form-control" id="sub_title" name="sub_title" placeholder="Enter Project Sub-Title">
					</div>
				</div>
			</div>

			<div class="row">
    			<div class="col-sm-12">
					<div class="form-group">
						<label for="email">Project Description :</label>
						<textarea class="form-control"  id="description"  name="description" placeholder="Enter Project Description"></textarea>
					</div>
				</div>
			</div>

<!-- 
			<div class="row">
    			<div class="col-sm-6">
					<div class="form-group">
						<label for="email">Project Referance</label>
						<input type="text" class="form-control" id="referance" name="referance" placeholder="Enter Project Referance">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="email">Project Category</label>
						<select class="form-control" id="category" name="category">
							<option>Select Category</option>
							<option>Design</option>
							<option>Development</option>
							<option>Software Development</option>
						</select>
					</div>
				</div>
			</div>


			<div class="row">
    			<div class="col-sm-6">
					<div class="form-group">
						<label for="email">Project Start Date :</label>
						<input type="text" class="form-control" id="start_date" name="start_date" placeholder="Enter Project Start Date">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="email">Project End Date :</label>
						<input type="text" class="form-control" id="end_date" name="end_date"  placeholder="Enter Project End Date">
					</div>
				</div>
			</div>


			<div class="row">
    			<div class="col-sm-6">
					<div class="form-group">
						<label for="email">Project Price :</label>
						<input type="text" class="form-control" id="project_price" name="project_price"  placeholder="Enter Project Value">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="email">Pay Amount</label>
						<input type="text" class="form-control" id="pay_amount" name="pay_amount"  placeholder="Enter Pay Amount">
					</div>
				</div>
			</div>

			<div class="row">
    			<div class="col-sm-6">
					<div class="form-group">
						<label for="email">Project Due Amount :</label>
						<input type="text" class="form-control" id="due_amount" name="due_amount"  placeholder="Enter Project Due Amount">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="email">Project Dateline</label>
						<input type="text" class="form-control" id="dateline" name="dateline"  placeholder="Enter Project dareline">
					</div>
				</div>
			</div>


			<div class="row">
    			<div class="col-sm-6">
					<div class="form-group">
						<label for="email">Project Developer :</label>
						<input type="text" class="form-control" id="dev_name" name="dev_name"  placeholder="Enter Project Developer">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="email">Developer Email ID</label>
						<input type="text" class="form-control" id="dev_email" name="dev_email"  placeholder="Enter Developer Email ID">
					</div>
				</div>
			</div>

			<div class="row">
    			<div class="col-sm-6">
					<div class="form-group">
						<label for="email">Developer Phone Number :</label>
						<input type="text" class="form-control" id="dev_phone" name="dev_phone"  placeholder="Enter Phone Number">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="email">Project Status</label>
						<select class="form-control" id="status" name="status">
							<option>Select Status</option>
							<option>Starting</option>
							<option>Running</option>
							<option>End Project</option>
						</select>
					</div>
				</div>
			</div> -->
			<div class="row">
    			<div class="col-sm-6">
					<?php wp_nonce_field('new_project_form'); ?>
					<button type="submit" name="submit" id="submit" class="btn btn-default">Submit Project </button>
				</div>
			</div>
			</form>
		</div>