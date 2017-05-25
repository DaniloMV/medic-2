<script>
  export default {
    data() {
      return {
        list: [],
        search: {
          ref_no: '',
          acc_no: '',
          name: '',
          email: '',
          is_active: 'All',
        },
        searching: false,
        sortkey: '',
        reverse: false,
        selected_page: '50',
        pagination: {
          total: 0,
          from: 1,
          per_page: 1,
          current_page: 1,
          last_page: 0,
          to: 5
        }
      }
    },
    mounted() {
      this.fetchTable();
    },
    methods: {
      fetchTable() {
        this.searching = true;
        let data = {
          paginate: this.pagination.per_page,
          page: this.pagination.current_page,
          sortkey: this.sortkey,
          reverse: this.reverse,
          per_page: this.selected_page,
          ref_no: this.search.ref_no,
          acc_no: this.search.acc_no,
          name: this.search.name,
          email: this.search.email,
          status: this.search.status !== 'All' ? this.search.status : '',
        };
        axios.get(
          '/api/patients?page=' + data.page +
          '&perpage=' + data.per_page +
          '&sortkey=' + data.sortkey +
          '&reverse=' + data.reverse +
          '&ref_no=' + data.ref_no +
          '&acc_no=' + data.acc_no +
          '&name=' + data.name +
          '&email=' + data.email +
          '&status=' + data.status
        ).then((response) => {
          const result = JSON.parse(JSON.stringify(response.data))
            this.list = result.data;
            this.pagination = {
              total: result.total,
              from: result.from,
              to: result.to,
              per_page: result.per_page,
              current_page: result.current_page,
              last_page: result.last_page,
            }
        });
        this.searching = false;
      },
      searchData() {
        this.pagination.current_page = 1;
        this.fetchTable();
      },
      sortBy(sortkey) {
        this.pagination.current_page = 1;
        this.reverse = (this.sortkey == sortkey) ? !this.reverse : false;
        this.sortkey = sortkey;
        this.fetchTable();
      },
      redirectEdit(id) {
        window.location.href = 'patient/' + id + '/edit';
      }
    },
    watch: {
      'selected_page' (val) {
        this.selected_page = val;
        this.pagination.current_page = 1;
        this.fetchTable();
      }
    }
  }
</script>