<div class="form-group {{ $errors->has('imp_title') ? 'has-error' : ''}}">
    <label for="imp_title" class="control-label">{{ 'Imp Title' }}</label>
    <input class="form-control" name="imp_title" type="text" id="imp_title" value="{{ isset($imprest->imp_title) ? $imprest->imp_title : ''}}" required>
    {!! $errors->first('imp_title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('requested_by') ? 'has-error' : ''}}">
    <label for="requested_by" class="control-label">{{ 'Requested By' }}</label>
    <input class="form-control" name="requested_by" type="number" id="requested_by" value="{{ isset($imprest->requested_by) ? $imprest->requested_by : ''}}" required>
    {!! $errors->first('requested_by', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ref_no') ? 'has-error' : ''}}">
    <label for="ref_no" class="control-label">{{ 'Ref No' }}</label>
    <input class="form-control" name="ref_no" type="text" id="ref_no" value="{{ isset($imprest->ref_no) ? $imprest->ref_no : ''}}" >
    {!! $errors->first('ref_no', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('start_date') ? 'has-error' : ''}}">
    <label for="start_date" class="control-label">{{ 'Start Date' }}</label>
    <input class="form-control" name="start_date" type="date" id="start_date" value="{{ isset($imprest->start_date) ? $imprest->start_date : ''}}" required>
    {!! $errors->first('start_date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group  {{ $errors->has('end_date') ? 'has-error' : ''}}">
    <label for="end_date" class="control-label">{{ 'End Date' }}</label>
    <input class="form-control" name="end_date" type="date" id="end_date" value="{{ isset($imprest->end_date) ? $imprest->end_date : ''}}" required>
    {!! $errors->first('end_date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('amount_rqst') ? 'has-error' : ''}}">
    <label for="amount_rqst" class="control-label">{{ 'Amount Rqst' }}</label>
    <input class="form-control" name="amount_rqst" type="number" id="amount_rqst" value="{{ isset($imprest->amount_rqst) ? $imprest->amount_rqst : ''}}" >
    {!! $errors->first('amount_rqst', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('purpose') ? 'has-error' : ''}}">
    <label for="purpose" class="control-label">{{ 'Purpose' }}</label>
    <textarea class="form-control" rows="5" name="purpose" type="textarea" id="purpose" required>{{ isset($imprest->purpose) ? $imprest->purpose : ''}}</textarea>
    {!! $errors->first('purpose', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
