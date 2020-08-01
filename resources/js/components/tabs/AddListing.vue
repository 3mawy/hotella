<template>
    <div class="modal fade" id="add-listing" tabindex="-1" role="dialog" aria-labelledby="addListing" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form @submit.prevent="createBooking">
                    <div class="modal-body">
                        <div class="form-group">
                            <input v-model="form.booked_by" type="text" name="booked_by" id="booked_by"
                                   placeholder="Booked by"
                                   class="form-control"
                                   :class="{ 'is-invalid': form.errors.has('booked_by') }">
                            <has-error :form="form" field="booked_by"></has-error>
                        </div>

                        <div class="form-group">
                            <input v-model="form.hotel" type="text" name="hotel" id="hotel"
                                   placeholder="Hotel"
                                   class="form-control" :class="{ 'is-invalid': form.errors.has('hotel') }">
                            <has-error :form="form" field="hotel"></has-error>
                        </div>
                        <div class="form-group">
                            <input v-model="form.room_id"  type="text" name="room_id" id="room_id"
                                   placeholder="Room-id"
                                   class="form-control" :class="{ 'is-invalid': form.errors.has('room_id') }">
                            <has-error :form="form" field="room_id"></has-error>
                        </div>
                        <div class="form-group">
                            <input v-model="form.check_in" type="date" name="check_in" id="check_in"
                                   placeholder="Check in"
                                   class="form-control" :class="{ 'is-invalid': form.errors.has('check_in') }">
                            <has-error :form="form" field="check_in"></has-error>
                        </div>
                        <div class="form-group">
                            <input v-model="form.check_out" type="date" name="check_out" id="check_out"
                                   placeholder="Check out"
                                   class="form-control"
                                   :class="{ 'is-invalid': form.errors.has('check_out') }">
                            <has-error :form="form" field="check_out"></has-error>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</template>

<script>
    export default {
        data() {
            return {
                form: new Form({
                    booked_by: '',
                    hotel: '',
                    room_id: '',
                    check_in: '',
                    check_out:'',
                })
            }
        },
        methods: {
            createBooking(){
                this.form.post('api/listing')
            }
        }
    }
</script>
