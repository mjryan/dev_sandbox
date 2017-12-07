import {Observable} from 'data/observable';
import {ObservableArray} from 'data/observable-array';
import * as http from "http";

export class ViewModel extends Observable {
    posts: ObservableArray<any>
    constructor() {
        super();

        this.posts = new ObservableArray([]);

        this.getPosts();
    }

    private getPosts() {
        http.getJSON("https://www.reddit.com/r/aww.json")
            .then((response: any) => {
                var children = <Array<any>>response.data.children;

                children.forEach(item => {
                    this.posts.push({
                        title: item.data.title,
                        thumbnail: item.data.thumbnail,
                        user: item.data.author,
                        votes: item.data.ups,
                        url: item.data.url
                    });
                });

            })
    }
}