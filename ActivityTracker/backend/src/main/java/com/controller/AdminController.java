package com.controller;

import com.domain.Blog;


import com.domain.Goal;
import com.service.BlogServices;
import com.service.GoalService;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import javax.validation.Valid;
import java.util.ArrayList;
import java.util.List;

@RestController
@RequestMapping("/admin")
public class AdminController {


    private BlogServices blogServices;
    private GoalService goalService;



    public  AdminController(BlogServices blogServices, GoalService goalService){

        this.blogServices = blogServices;
        this.goalService = goalService;

    }


    @PostMapping(path = "/blog")
    public void add(@Valid @RequestBody Blog blog) {

        blogServices.insert(blog);
    }

    @GetMapping("/blog/{b_id}")
   public Blog getBlog(@PathVariable int b_id){
        Blog blog = blogServices.get(b_id);
        return blog;
    }
    @GetMapping("/blogs")
    public ResponseEntity<List<Blog>> getAllBlogs() {
        List<Blog> blogs = blogServices.getAll();
        return ResponseEntity.ok().body(blogs);
    }
    @GetMapping("/blogs/{b_id}")
    public boolean deleteBlog(@PathVariable int b_id){
        blogServices.delete(b_id);
        return true;
    }







}
