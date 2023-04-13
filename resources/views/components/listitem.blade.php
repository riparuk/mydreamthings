<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->
    <ul class="list-group list-group-flush mt-2">
        @foreach ($itemlist as $item)
            <div class="rounded">
                <li onclick="toggleDesc(this)" style="list-style: none;">
                    <div>{{ $item->name }}</div>
                    <span class="badge bg-success">
                        {{ $item->currentBudget }}/{{ $item->price }}
                    </span>
                    <span class="badge bg-info">
                        2 month
                    </span>
                    <hr>
                </li>
                <div class="desc ml-4" id="desc" style="display:none; font-size: 18px;">
                    <pre>Description : {{ $item->desc }}
      Price : Rp. {{ $item->price }}
      Current Budget : Rp. {{ $item->currentBudget }}
      Monthly Income Budget : Rp. {{ $item->monthlyIncome }}
      Estimation : 2 month</pre>
                    <label for="add_budget" class="sr-only">Add Budget</label>
                    <input type="number" class="form-control" style="width: 50%" id="add_budget" placeholder="Value">
                    <button type="submit" class="btn btn-info mb-2">Add</button>
                </div>
            </div>
        @endforeach

    </ul>

    <script>
        function toggleDesc(element) {
            var desc = element.nextElementSibling;

            if (desc.style.display === "none") {
                document.querySelectorAll('.desc').forEach(function(el) {
                    el.style.display = 'none';
                });
                desc.style.display = "block";
            } else {
                desc.style.display = "none";
            }
        }
    </script>
</div>
