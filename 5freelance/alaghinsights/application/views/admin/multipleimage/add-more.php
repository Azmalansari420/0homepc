add more

<script>
$(document).ready(function(){

  // Add more witness
  $('#addMoreWitness').click(function(){
    let clone = $('.witness-field:first').clone();

    clone.find('input').val(''); // clear inputs
    $('.witness-field:last').after(clone);
  });

  // Remove witness
  $(document).on('click','.remove-witness',function(){
    if($('.witness-field').length > 1){
      $(this).closest('.witness-field').remove();
    } else {
      alert('At least one witness is required');
    }
  });

});
</script>


<div class="col-lg-12">

  <!-- Witness block -->
  <div class="row witness-field"
       style="border:1px solid white;margin-bottom:5px;padding:12px 5px;border-radius:10px;">

    <div class="col-lg-4 mt-2">
      <label class="form-label text-white">Witness Name</label>
      <input type="text" class="contactinfo-form" name="witness_name[]" placeholder="Witness Name" required>
    </div>

    <div class="col-lg-4 mt-2">
      <label class="form-label text-white">Witness A/C Name</label>
      <input type="text" class="contactinfo-form" name="witness_acname[]" placeholder="Witness A/C Name" required>
    </div>

    <div class="col-lg-4 mt-2">
      <label class="form-label text-white">Witness Guardian Name</label>
      <input type="text" class="contactinfo-form" name="witness_gurdianname[]" placeholder="Witness Guardian Name" required>
    </div>

    <div class="col-lg-6 mt-2">
      <label class="form-label text-white">Witness Mobile</label>
      <input type="text" class="contactinfo-form" name="witness_mobile[]" placeholder="Witness Mobile" required>
    </div>

    <div class="col-lg-6 mt-2">
      <label class="form-label text-white">Witness Address</label>
      <input type="text" class="contactinfo-form" name="witness_address[]" placeholder="Witness Address" required>
    </div>

    <div class="col-lg-12 mt-2 text-end">
      <button type="button" class="btn btn-danger remove-witness">Remove</button>
    </div>

  </div>

  <!-- Add more button -->
  <div class="text-end mt-2">
    <button type="button" class="btn btn-primary" id="addMoreWitness">
      Add More Witness
    </button>
  </div>

</div>