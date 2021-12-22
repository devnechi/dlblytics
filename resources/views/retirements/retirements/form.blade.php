<div class="form-group {{ $errors->has('amount_used') ? 'has-error' : ''}}">
    <label for="amount_used" class="control-label">{{ 'Amount Used' }}</label>
    <input class="form-control" name="amount_used" type="number" id="amount_used" value="{{ isset($retirement->amount_used) ? $retirement->amount_used : ''}}" >
    {!! $errors->first('amount_used', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('receipt_pathe') ? 'has-error' : ''}}">
    <label for="receipt_pathe" class="control-label">{{ 'Receipt Pathe' }}</label>
    <input class="form-control" name="receipt_pathe" type="text" id="receipt_pathe" value="{{ isset($retirement->receipt_pathe) ? $retirement->receipt_pathe : ''}}" >
    {!! $errors->first('receipt_pathe', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('described') ? 'has-error' : ''}}">
    <label for="described" class="control-label">{{ 'Described' }}</label>
    <textarea class="form-control" rows="5" name="described" type="textarea" id="described" >{{ isset($retirement->described) ? $retirement->described : ''}}</textarea>
    {!! $errors->first('described', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('balance') ? 'has-error' : ''}}">
    <label for="balance" class="control-label">{{ 'Balance' }}</label>
    <input class="form-control" name="balance" type="number" id="balance" value="{{ isset($retirement->balance) ? $retirement->balance : ''}}" >
    {!! $errors->first('balance', '<p class="help-block">:message</p>') !!}
</div>


    <input  name="imp_act_id" type="hidden" id="imp_act_id" value="{{ isset($retirement->imp_act_id) ? $retirement->imp_act_id : ''}}" >


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
