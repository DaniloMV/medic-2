@extends('layouts.app')
@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
    	Patients Profile
    </div>

    <div class="panel-body" v-cloak>
        <patientprofile inline-template>
        	<div>
	            <form action="#" @submit.prevent="searchData" method="GET">
	                <div class="row">
	                    <div class="col-md-12 col-xs-12">
	                        <div class="row">
	                            <div class="col-md-2 col-xs-6">
	                                <div class="form-group">
	                                    <label for="ref_no" class="control-label">Ref No</label>
	                                    <input type="text" name="ref_no" class="form-control" v-model="search.ref_no" placeholder="Ref No">
	                                </div>
	                            </div>
	                            <div class="col-md-2 col-xs-6">
	                                <div class="form-group">
	                                    <label for="acc_no" class="control-label">Acc No</label>
	                                    <input type="text" name="acc_no" class="form-control" v-model="search.acc_no" placeholder="Acc No">
	                                </div>
	                            </div>
	                            <div class="col-md-2 col-xs-6">
	                                <div class="form-group">
	                                    <label for="name" class="control-label">Name</label>
	                                    <input type="text" name="name" class="form-control" v-model="search.name" placeholder="Name">
	                                </div>
	                            </div>
	                            <div class="col-md-2 col-xs-6">
	                                <div class="form-group">
	                                    <label for="email" class="control-label">Email</label>
	                                    <input type="text" name="email" class="form-control" v-model="search.email" placeholder="Email">
	                                </div>
	                            </div>
	                            <div class="col-md-2 col-xs-6">
	                                <div class="form-group">
	                                    <label for="status" class="control-label">Active</label>
	                                    <select2 v-model="search.is_active">
	                                        <option value="All">All</option>
	                                        <option value="1">Active</option>
	                                        <option value="0">Inactive</option>
	                                    </select2>
	                                </div>
	                            </div>
	                            <div class="col-md-2 col-xs-4 pull-right">
	                            	<div class="form-group">
		                                <div class="row">
		                                    <div class="col-md-9 col-xs-10 pull-right text-center">
		                                        <select2 v-model="selected_page">
		                                            <option value="50">50 /page</option>
		                                            <option value="100">100 /page</option>
		                                            <option value="200">200 /page</option>
		                                        </select2>
		                                        <span style="margin-top: 5px; font-size: 15px;" v-if="pagination.total">
		                                            @{{pagination.from}} - @{{pagination.to}} (@{{pagination.total}})
		                                        </span>
		                                    </div>
		                                </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>

	                <div class="row">
	                    <div class="col-md-12 col-xs-12">
	                        <div class="pull-left" style="margin-bottom: 20px;">
	                            <button type="submit" class="btn btn-default btn-md">
	                                <i class="glyphicon glyphicon-search"></i>
	                                <span class="hidden-xs"> Search</span>
	                            </button>
	                            <a href="/patient/create" class="btn btn-success btn-md">
	                                <i class="glyphicon glyphicon-plus"></i>
	                                <span class="hidden-xs"> Create Patient</span>
	                            </a>
	                            <span style="padding-left: 10px;">
	                            	<i class="glyphicon glyphicon-repeat normal-right-spinner" v-if="searching"></i>
	                            </span>
	                        </div>
	                    </div>
	                </div>
	            </form>

            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr style="background-color: #a3a3c2;" class="inverse head">
                        <th class="col-md-1 text-center">
                            #
                        </th>
                        <th class="col-md-2 text-center">
                            <a href="#" @click="sortBy('ref_no')">Ref Number</a>
                            <span v-if="sortkey == 'ref_no' && !reverse" class="fa fa-caret-down"></span>
                            <span v-if="sortkey == 'ref_no' && reverse" class="fa fa-caret-up"></span>
                        </th>
                        <th class="col-md-2 text-center">
                            <a href="#" @click="sortBy('acc_no')">Acc Number</a>
                            <span v-if="sortkey == 'acc_no' && !reverse" class="fa fa-caret-down"></span>
                            <span v-if="sortkey == 'acc_no' && reverse" class="fa fa-caret-up"></span>
                        </th>
                        <th class="col-md-2 text-center">
                            <a href="#" @click="sortBy('name')">Name</a>
                            <span v-if="sortkey == 'name' && !reverse" class="fa fa-caret-down"></span>
                            <span v-if="sortkey == 'name' && reverse" class="fa fa-caret-up"></span>
                        </th>
                        <th class="col-md-1 text-center">
                            <a href="#" @click="sortBy('nric')">NRIC/ Passport</a>
                            <span v-if="sortkey == 'nric' && !reverse" class="fa fa-caret-down"></span>
                            <span v-if="sortkey == 'nric' && reverse" class="fa fa-caret-up"></span>
                        </th>
                        <th class="col-md-2 text-center">
                            <a href="#" @click="sortBy('contact')">Contact</a>
                            <span v-if="sortkey == 'contact' && !reverse" class="fa fa-caret-down"></span>
                            <span v-if="sortkey == 'contact' && reverse" class="fa fa-caret-up"></span>
                        </th>
                        <th class="col-md-2 text-center">
                            <a href="#" @click="sortBy('email')">Email</a>
                            <span v-if="sortkey == 'email' && !reverse" class="fa fa-caret-down"></span>
                            <span v-if="sortkey == 'email' && reverse" class="fa fa-caret-up"></span>
                        </th>
                    </tr>

                    <tr v-for="(patient, index) in list" @click="redirectEdit(patient.id)" class="row_edit">
                        <td class="col-md-1 text-center">
                            @{{ index + pagination.from }}
                        </td>
                        <td class="col-md-2 text-center">
                            @{{ patient.ref_no }}
                        </td>
                        <td class="col-md-2 text-left">
                            <span class="col-md-1 col-xs-2">
                                <i class="fa fa-circle" style="color:#60df20;" v-if="patient.is_active === 1"></i>
                                <i class="fa fa-circle" style="color:grey;" v-if="patient.is_active === 0"></i>
                            </span>
                            <span class="col-md-9 col-xs-10">
                                @{{ patient.acc_no }}
                            </span>
                        </td>
                        <td class="col-md-2 text-left">
                        	@{{ patient.name }}
                        </td>
                        <td class="col-md-1 text-center">
                            @{{ patient.nric }}
                        </td>
                        <td class="col-md-2 text-left">
                            @{{ patient.contact }}
                            <span v-if="patient.alt_contact">/ @{{ patient.alt_contact }}</span>
                        </td>
                        <td class="col-md-2 text-left">
                            @{{ patient.email }}
                        </td>
                    </tr>
                    <tr v-if="! pagination.total">
                        <td colspan="14" class="text-center"> No Results Found </td>
                    </tr>
                </table>
            </div>
            <div class="pull-left">
                <pagination :pagination="pagination" :callback="fetchTable" :offset="4"></pagination>
            </div>
        	</div>
        </patientprofile>
    </div>
</div>

@endsection
