@csrf
<div class="mb-3 mt-3">
    <label for="email" class="form-label">Status:</label>
    <select class="form-control" name="status">
        <option value="booked" {{ (isset($appointment) && $appointment->status == 'booked') ? ' selected' : '' }}>Booked</option>
        <option value="completed" {{ (isset($appointment) && $appointment->status == 'completed') ? ' selected' : '' }}>Completed</option>
        <option value="cancelled" {{ (isset($appointment) && $appointment->status == 'cancelled') ? ' selected' : '' }}>Cancelled</option>
    </select>
</div>
<div class="mb-3">
    <label for="pwd" class="form-label">Date:</label>
    <input type="date" class="form-control" id="date" name="date" value="{{(isset($appointment)) ?  $appointment->date : '' }}">
</div>
<div class="mb-3">
    <label for="pwd" class="form-label">Time:</label>
    <input type="time" class="form-control" id="time" name="time" value="{{(isset($appointment)) ?  $appointment->time : '' }}">
</div>
<div class="mb-3">
    <label for="pwd" class="form-label">Duration:</label>
    <input type="text" class="form-control" id="duration" name="duration" value="{{(isset($appointment)) ?  $appointment->duration : '' }}">
</div>
<div class="form-check mb-3">
    <label class="form-check-label">
    <input class="form-check-input" type="checkbox" name="invoiced" value="1" {{(isset($appointment) && $appointment->invoiced == 1) ?  ' checked' : '' }}> Invoiced?
    </label>
</div>
