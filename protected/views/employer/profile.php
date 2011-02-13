<?php
	$this->pageTitle = 'Employer Profile';
	$this->breadcrumbs = array('Profile');
?>

<div class="float-right">
<?php
	echo CHtml::link('Edit Profile', array('employer/edit'));
?>
</div>

<table id="profile-table">

<tr>
<td class="align-right">Company Name:</td>
<td><?php echo CHtml::encode($model->company_name); ?></td>
</tr>

<tr>
<td class="align-right">Address Line 1:</td>
<td><?php echo CHtml::encode($model->address1); ?></td>
</tr>

<tr>
<td class="align-right">Address Line 2:</td>
<td><?php echo CHtml::encode($model->address2); ?></td>
</tr>

<tr>
<td class="align-right">Country:</td>
<td><?php echo CHtml::encode(Country::model()->getName($model->country_id)); ?></td>
</tr>

<tr>
<td class="align-right">State:</td>
<td><?php echo CHtml::encode(State::model()->getName($model->state_id)); ?></td>
</tr>

<tr>
<td class="align-right">City:</td>
<td><?php echo CHtml::encode(City::model()->getName($model->city_id)); ?></td>
</tr>

<tr>
<td class="align-right">Pincode:</td>
<td><?php echo CHtml::encode($model->pincode); ?></td>
</tr>

<tr>
<td class="align-right">Phone:</td>
<td><?php echo CHtml::encode($model->contact_phone); ?></td>
</tr>

<tr>
<td class="align-right">Mobile:</td>
<td><?php echo CHtml::encode($model->contact_mobile); ?></td>
</tr>

<tr>
<td class="align-right">Website:</td>
<td><?php echo CHtml::encode($model->website); ?></td>
</tr>

<tr>
<td class="align-right">Total Tunover:</td>
<td><?php echo CHtml::encode($model->total_tunover); ?></td>
</tr>

<tr>
<td class="align-right">Number Of Employees:</td>
<td><?php echo CHtml::encode($model->number_of_employees); ?></td>
</tr>

<tr>
<td class="align-right">Sector:</td>
<td><?php echo CHtml::encode($model->sector); ?></td>
</tr>

<tr>
<td class="align-right">Company Profile:</td>
<td><?php echo CHtml::encode($model->company_profile); ?></td>
</tr>

<tr>
<td class="align-right">Profile Settings:
<td><?php echo CHtml::encode($model->profileSettingsText); ?></td>
</tr>

<tr>
<td class="align-right">Contact Settings:
<td><?php echo CHtml::encode($model->contactSettingsText); ?></td>
</tr>

</table>
