package com.service;

import com.domain.Blog;
import com.domain.TaxUser;

import java.util.List;

public interface BlogServices {

    public Blog insert(Blog blog);

    public Blog get(int id);

    public List<Blog> getAll();

    public Blog update(Blog blog);

    public void delete(int id);
}
