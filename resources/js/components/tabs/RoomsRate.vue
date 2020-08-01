<template>
    <div class="container">
        <div class="row mt-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title mb-0 mt-2 mr-2">Bookings Table</h3>
                        <button class="btn btn-success" data-toggle="modal" data-target="#add-booking">Add New <i
                            class="fas fa-user-plus"></i></button>

                        <div class="card-tools mb-0 mt-2">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                       placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Booked by</th>
                                <th>Hotel</th>
                                <th>Room-id</th>
                                <th>Check in</th>
                                <th>Check out</th>
                                <th>Created at</th>
                                <th>Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="booking in bookings" :key="booking.id">

                                <td>{{booking.id}}</td>
                                <td>{{booking.booked_by}}</td>
                                <td><span class="tag tag-success">{{booking.hotel}}</span></td>
                                <td>{{booking.room_id}}</td>
                                <td>{{booking.check_in}}</td>
                                <td>{{booking.check_out}}</td>
                                <td>{{booking.created_at | myDate }}</td>
                                <td>
                                    <a href="#" class="mr-1">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="ml-1 ">
                                        <i class="fa fa-trash red"></i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- Modal -->
        <bookings-modal></bookings-modal>

    </div>

</template>
<script>
   /* export default {
        data() {
            return {
                bookings : {},
            }
        },
        methods: {
            loadBookings() {
                axios.get("api/booking").then(({data}) => (this.bookings = data.data));
            },
        },
        created() {
            this.loadBookings();
        }
    }*/
</script>
