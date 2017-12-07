"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var observable_1 = require("data/observable");
var observable_array_1 = require("data/observable-array");
var http = require("http");
var ViewModel = (function (_super) {
    __extends(ViewModel, _super);
    function ViewModel() {
        var _this = _super.call(this) || this;
        _this.posts = new observable_array_1.ObservableArray([]);
        _this.getPosts();
        return _this;
    }
    ViewModel.prototype.getPosts = function () {
        var _this = this;
        http.getJSON("https://www.reddit.com/r/aww.json")
            .then(function (response) {
            var children = response.data.children;
            children.forEach(function (item) {
                _this.posts.push({
                    title: item.data.title,
                    thumbnail: item.data.thumbnail,
                    user: item.data.author,
                    votes: item.data.ups,
                    url: item.data.url
                });
            });
        });
    };
    return ViewModel;
}(observable_1.Observable));
exports.ViewModel = ViewModel;
//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoibWFpbi12aWV3LW1vZGVsLmpzIiwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsibWFpbi12aWV3LW1vZGVsLnRzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiI7O0FBQUEsOENBQTJDO0FBQzNDLDBEQUFzRDtBQUN0RCwyQkFBNkI7QUFFN0I7SUFBK0IsNkJBQVU7SUFFckM7UUFBQSxZQUNJLGlCQUFPLFNBS1Y7UUFIRyxLQUFJLENBQUMsS0FBSyxHQUFHLElBQUksa0NBQWUsQ0FBQyxFQUFFLENBQUMsQ0FBQztRQUVyQyxLQUFJLENBQUMsUUFBUSxFQUFFLENBQUM7O0lBQ3BCLENBQUM7SUFFTyw0QkFBUSxHQUFoQjtRQUFBLGlCQWdCQztRQWZHLElBQUksQ0FBQyxPQUFPLENBQUMsbUNBQW1DLENBQUM7YUFDNUMsSUFBSSxDQUFDLFVBQUMsUUFBYTtZQUNoQixJQUFJLFFBQVEsR0FBZSxRQUFRLENBQUMsSUFBSSxDQUFDLFFBQVEsQ0FBQztZQUVsRCxRQUFRLENBQUMsT0FBTyxDQUFDLFVBQUEsSUFBSTtnQkFDakIsS0FBSSxDQUFDLEtBQUssQ0FBQyxJQUFJLENBQUM7b0JBQ1osS0FBSyxFQUFFLElBQUksQ0FBQyxJQUFJLENBQUMsS0FBSztvQkFDdEIsU0FBUyxFQUFFLElBQUksQ0FBQyxJQUFJLENBQUMsU0FBUztvQkFDOUIsSUFBSSxFQUFFLElBQUksQ0FBQyxJQUFJLENBQUMsTUFBTTtvQkFDdEIsS0FBSyxFQUFFLElBQUksQ0FBQyxJQUFJLENBQUMsR0FBRztvQkFDcEIsR0FBRyxFQUFFLElBQUksQ0FBQyxJQUFJLENBQUMsR0FBRztpQkFDckIsQ0FBQyxDQUFDO1lBQ1AsQ0FBQyxDQUFDLENBQUM7UUFFUCxDQUFDLENBQUMsQ0FBQTtJQUNWLENBQUM7SUFDTCxnQkFBQztBQUFELENBQUMsQUEzQkQsQ0FBK0IsdUJBQVUsR0EyQnhDO0FBM0JZLDhCQUFTIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IHtPYnNlcnZhYmxlfSBmcm9tICdkYXRhL29ic2VydmFibGUnO1xuaW1wb3J0IHtPYnNlcnZhYmxlQXJyYXl9IGZyb20gJ2RhdGEvb2JzZXJ2YWJsZS1hcnJheSc7XG5pbXBvcnQgKiBhcyBodHRwIGZyb20gXCJodHRwXCI7XG5cbmV4cG9ydCBjbGFzcyBWaWV3TW9kZWwgZXh0ZW5kcyBPYnNlcnZhYmxlIHtcbiAgICBwb3N0czogT2JzZXJ2YWJsZUFycmF5PGFueT5cbiAgICBjb25zdHJ1Y3RvcigpIHtcbiAgICAgICAgc3VwZXIoKTtcblxuICAgICAgICB0aGlzLnBvc3RzID0gbmV3IE9ic2VydmFibGVBcnJheShbXSk7XG5cbiAgICAgICAgdGhpcy5nZXRQb3N0cygpO1xuICAgIH1cblxuICAgIHByaXZhdGUgZ2V0UG9zdHMoKSB7XG4gICAgICAgIGh0dHAuZ2V0SlNPTihcImh0dHBzOi8vd3d3LnJlZGRpdC5jb20vci9hd3cuanNvblwiKVxuICAgICAgICAgICAgLnRoZW4oKHJlc3BvbnNlOiBhbnkpID0+IHtcbiAgICAgICAgICAgICAgICB2YXIgY2hpbGRyZW4gPSA8QXJyYXk8YW55Pj5yZXNwb25zZS5kYXRhLmNoaWxkcmVuO1xuXG4gICAgICAgICAgICAgICAgY2hpbGRyZW4uZm9yRWFjaChpdGVtID0+IHtcbiAgICAgICAgICAgICAgICAgICAgdGhpcy5wb3N0cy5wdXNoKHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHRpdGxlOiBpdGVtLmRhdGEudGl0bGUsXG4gICAgICAgICAgICAgICAgICAgICAgICB0aHVtYm5haWw6IGl0ZW0uZGF0YS50aHVtYm5haWwsXG4gICAgICAgICAgICAgICAgICAgICAgICB1c2VyOiBpdGVtLmRhdGEuYXV0aG9yLFxuICAgICAgICAgICAgICAgICAgICAgICAgdm90ZXM6IGl0ZW0uZGF0YS51cHMsXG4gICAgICAgICAgICAgICAgICAgICAgICB1cmw6IGl0ZW0uZGF0YS51cmxcbiAgICAgICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgIH0pXG4gICAgfVxufSJdfQ==